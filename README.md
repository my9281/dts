# dts

ACFUN / 电波大逃杀，PHP 多人网页生存游戏。代码版本 N.E.W. v1.25，页面标题默认是「电波大逃杀」。玩家注册后进房间，在格子地图上探索、战斗、用道具和技能，禁区收缩后决出胜者。

本仓库跟踪 https://github.com/my9281/dts ，内容与上游 [sillycross/dts](https://github.com/sillycross/dts) 在 2017-06-17 的 `fc790cc1` 相同。本地没有超出这个分叉点的提交。已记录的上游 `master` 在这之后还有提交，最远到 2018-02-23。

运行需要 PHP、MySQL 或 MariaDB，以及可写的 `gamedata`、`include`、`templates`。入口是 `index.php`。安装可以用 `install_NEW.php`，或手工建库 `acdts` 并导入 `gamedata/sql/all.sql`，再把两份 `*.sample.php` 复制成 `server.config.php` 和 `modulemng.config.php`。装完删除 `install_NEW.php`。游戏模块的原有说明仍在 `readme.txt` 和各模块目录里。

仓库里没有已填写的 `server.config.php`。sample 里的数据库账号和 `authkey` 是占位，不是部署口令。

## 未完成

- 没有本账号自己的功能提交。
- 停在 2017-06-17，没有跟上上游后来的提交。
- 可选 daemon（`acdts-daemonctl.sh` / `.bat`）要单独启动，不随网页一起起来。
