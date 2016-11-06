# PhDanmaku
C++与PHP开发的实时弹幕播放系统，包含留言展示板以及审核端

## 安装方法::弹幕放映端
### Windows
 - 请使用QtCreater 用你喜欢的编译环境编译本项目
 - 尚未支持通过Win32API保持窗体永远在最前
 
### Linux
 - 请使用QtCreater 用你喜欢的编译环境编译本项目
 - Linux下并没有找到适当的方法保证100%窗口在最前
 
## 安装方法::服务器端

### General
 - 服务器要求：
 - HTTP Server(Apache lighttpd nginx...喜欢的就好)
 - PHP
 - MySQL(MariaDB)
 
 - 安装方法：
 - 导入database.sql(安全考虑可以修改默认访问密码，并保证与config.php的内容一致)
 - 调整config.php配置符合应用要求
 - 将server目录下的文件放入HTTP根目录下(建议删除敏感文件)
 
## 使用方法

### 客户端
 - 启动时请填写服务器的IP地址和客户端ID，客户端ID应保证为整数(int)并在整个放映网络中唯一
 
### 服务端
 - admin.php为审核系统
 - board.php为展示板系统
 - random.php为抽选系统
