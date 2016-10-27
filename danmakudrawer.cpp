#include "danmakudrawer.h"
#include "ui_danmakudrawer.h"
#include "mainwindow.h"

DanmakuDrawer::DanmakuDrawer(QWidget *parent) : QWidget(parent), ui(new Ui::DanmakuDrawer){
    setAttribute(Qt::WA_TransparentForMouseEvents);
    setAttribute(Qt::WA_TranslucentBackground);
    setWindowFlags(Qt::FramelessWindowHint | Qt::Tool | Qt::WindowStaysOnTopHint);
    srand(time(NULL));
    isprocessing = false;
    ui->setupUi(this);
}

DanmakuDrawer::~DanmakuDrawer(){
    delete ui;
}

void DanmakuDrawer::showEvent(QShowEvent* event){
    QWidget::showEvent(event);
    QString addr = MainWindow::getInstance()->getServerAddr();
    QString cid = MainWindow::getInstance()->getClientId();
    url = QUrl::fromUserInput("http://" + addr + "/client.php?cid=" + cid);
    mtimer = new QTimer(this);
    connect(mtimer, SIGNAL(timeout()), this, SLOT(getDanmaku()));
    mtimer->start(1000);
}

void DanmakuDrawer::getDanmaku(){
    if(isprocessing == false){
        isprocessing = true;
        reply = qnam.get(QNetworkRequest(url));
        connect(reply, SIGNAL(finished()), this, SLOT(processDanmaku()));
    }
}

void DanmakuDrawer::processDanmaku(){
    QNetworkReply* reply = qobject_cast<QNetworkReply*>(sender());
    QString json = reply->readAll();
    jr.parse(json.toUtf8().constData(), jv);
    int count = jv[0].asInt();
    for(int i = 1; i <= count; i++){
        int type = jv[i][0].asInt();
        QString color = jv[i][1].asString().c_str();
        int size = jv[i][2].asInt();
        QString comment = jv[i][3].asString().c_str();
        int wwidth = this->width();
        int wheight = this->height();
        QLabel *danmaku = new QLabel(this);
        danmaku->setText(comment.toHtmlEscaped());
        QPropertyAnimation *anima = new QPropertyAnimation(danmaku, "pos");
        int height= rand() % wheight - danmaku->height();
        int width = 0;
        QFont font = danmaku->font();
        font.setPointSize(size);
        font.setBold(true);
        danmaku->setFont(font);
        QPalette palette;
        palette.setColor(QPalette::Foreground, QColor(color));
        danmaku->setPalette(palette);
        QGraphicsDropShadowEffect *pLabelTextShadowEffect = new QGraphicsDropShadowEffect(this);
        pLabelTextShadowEffect->setColor(QColor("#000000"));
        pLabelTextShadowEffect->setBlurRadius(1);
        pLabelTextShadowEffect->setOffset(1, 1);
        danmaku->setGraphicsEffect(pLabelTextShadowEffect);
        danmaku->show();
        switch(type){
            case 1:
                width = ((wwidth / 2) - danmaku->width());
                danmaku->move(width, (height < 0 ? 0 : height));
                anima->setStartValue(QPoint(danmaku->x(), danmaku->y()));
                anima->setEndValue(QPoint(danmaku->x(), danmaku->y()));
                break;

            default:
                width = wwidth;
                danmaku->move(width, (height < 0 ? 0 : height));
                anima->setStartValue(QPoint(danmaku->x(), danmaku->y()));
                anima->setEndValue(QPoint(-(danmaku->width()), danmaku->y()));
                break;
        }
        anima->setDuration(300000 / (comment.count() <= 20 ? 20 : comment.count()));
        anima->setEasingCurve(QEasingCurve::Linear);
        connect(anima, SIGNAL(finished()), danmaku, SLOT(deleteLater()));
        connect(anima, SIGNAL(finished()), anima, SLOT(deleteLater()));
        anima->start();
    }
    reply->abort();
    delete(reply);
    isprocessing = false;
}
