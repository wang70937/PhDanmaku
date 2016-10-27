#ifndef DANMAKUDRAWER_H
#define DANMAKUDRAWER_H

#include <QWidget>
#include <QTimer>
#include <QNetworkAccessManager>
#include <QNetworkReply>
#include <QNetworkRequest>
#include <QtNetwork>
#include <QUrl>
#include <json/json.h>
#include <QLabel>
#include <QGraphicsDropShadowEffect>
#include "stdlib.h"
#include "time.h"

namespace Ui {
class DanmakuDrawer;
}

class DanmakuDrawer : public QWidget
{
    Q_OBJECT

public:
    explicit DanmakuDrawer(QWidget *parent = 0);
    ~DanmakuDrawer();
    void showEvent(QShowEvent* event);

private slots:
    void getDanmaku();
    void processDanmaku();

private:
    Ui::DanmakuDrawer *ui;
    QUrl url;
    QNetworkAccessManager qnam;
    QNetworkReply *reply;
    Json::Reader jr;
    Json::Value jv;
    QTimer *mtimer;
    bool isprocessing;
};

#endif // DANMAKUDRAWER_H
