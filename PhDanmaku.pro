#-------------------------------------------------
#
# Project created by QtCreator 2016-10-23T14:41:42
#
#-------------------------------------------------

QT       += core network gui
greaterThan(QT_MAJOR_VERSION, 4): QT += widgets

TARGET = PhDanmaku
TEMPLATE = app


SOURCES += main.cpp\
    mainwindow.cpp \
    danmakudrawer.cpp \
    jsoncpp.cpp

HEADERS  += mainwindow.h \
    danmakudrawer.h \
    json/json-forwards.h \
    json/json.h

FORMS    += mainwindow.ui \
    danmakudrawer.ui
