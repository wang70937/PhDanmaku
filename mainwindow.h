#ifndef MAINWINDOW_H
#define MAINWINDOW_H

#include <QMainWindow>
#include <QNetworkAccessManager>
#include <QNetworkReply>
#include <QNetworkRequest>
#include <QtNetwork>
#include <QUrl>
#include <QMessageBox>
#include <QDesktopWidget>
#include "danmakudrawer.h"

namespace Ui {
class MainWindow;
}

class MainWindow : public QMainWindow
{
    Q_OBJECT

public:
    explicit MainWindow(QWidget *parent = 0);
    ~MainWindow();
    static MainWindow* getInstance(QWidget* parent = 0);
    QString getServerAddr();
    QString getClientId();

private slots:
    void on_ConnectButton_clicked();

    void on_ExitButton_clicked();
    void checkClientRegister();

private:
    static MainWindow* instance;
    Ui::MainWindow *ui;
    DanmakuDrawer ddw;
    QUrl url;
    QNetworkAccessManager qnam;
    QNetworkReply *reply;
    QMessageBox msgbox;
    QDesktopWidget desktop;
    QRect screenSize;

};

#endif // MAINWINDOW_H
