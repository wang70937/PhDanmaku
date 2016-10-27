#include "mainwindow.h"
#include "ui_mainwindow.h"

MainWindow* MainWindow::instance = 0;
MainWindow::MainWindow(QWidget *parent) : QMainWindow(parent), ui(new Ui::MainWindow), reply(Q_NULLPTR){
    setWindowFlags(Qt::WindowStaysOnTopHint);
    ui->setupUi(this);
    instance = this;
}

MainWindow::~MainWindow(){
    delete ui;
}

void MainWindow::on_ConnectButton_clicked(){
    ui->ip_addr->setReadOnly(true);
    ui->c_id->setReadOnly(true);
    ui->ConnectButton->setEnabled(false);
    url = QUrl::fromUserInput("http://" + ui->ip_addr->text() + "/client.php?action=register&cid=" + ui->c_id->text());
    reply = qnam.get(QNetworkRequest(url));
    connect(reply, SIGNAL(finished()), this, SLOT(checkClientRegister()));
}

void MainWindow::checkClientRegister(){
    QNetworkReply* reply = qobject_cast<QNetworkReply*>(sender());
    if(reply->readAll() == "success"){
        screenSize = desktop.availableGeometry(this);
        ddw.setGeometry(screenSize);
        ddw.showMaximized();
        this->showMinimized();
    }else{
        msgbox.setText("Register Error!");
        msgbox.exec();
        ui->ip_addr->setReadOnly(false);
        ui->c_id->setReadOnly(false);
        ui->ConnectButton->setEnabled(true);
    }
    reply->abort();
}

QString MainWindow::getServerAddr(){
    return ui->ip_addr->text();
}

QString MainWindow::getClientId(){
    return ui->c_id->text();
}

void MainWindow::on_ExitButton_clicked(){
    exit(0);
}

MainWindow* MainWindow::getInstance(QWidget *parent){
    if(instance == NULL){
        instance = new MainWindow(parent);
    }
    return instance;
}
