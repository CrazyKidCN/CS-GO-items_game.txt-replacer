# CS:GO items_game.txt 替换脚本
一个用PHP写的，将 items_game_live.txt 里的自定义内容替换到 items_game.txt 内的脚本。
因每次 CS:GO 更新后 items_game.txt 都有可能被官方覆盖回默认，有些服主又要花时间重新修改 items_game.txt
只需将修改过的内容写进 items_game_live.txt ，当每次 CS:GO 更新后用该替换器替换即可

# 引用鸣谢
vdfparser.inc.php 基于 PHP VDF (Valve Data Format) KeyValue parser by devinwl 修改, 使其能够读取具有重复kv的vdf
https://github.com/devinwl/keyvalues-php

# 使用方法
将官方 items_game.txt 置放于与 replacer.php 相同的根目录下
将您的自定义 items_game_live.txt 置放于 items_game_live_input/ 文件夹下
编辑 replace.bat , 修改 php 目录为您的 php 安装目录
运行 replace.bat , 替换后的 items_game.txt 将会被输出在 items_game_output/ 文件夹




# CS:GO items_game.txt replacer
A PHP script replace items_game.txt by items_game_live.txt

# Credits
vdfparser.inc.php edited base on PHP VDF (Valve Data Format) KeyValue parser by devinwl for read vdf with repeat key-value
https://github.com/devinwl/keyvalues-php

# Usage
Place the offical items_game.txt file to the root dir.
Place your custom items_game_live.txt to items_game_live_input/ folder
Edit replace.bat, change the php path to your install dir.
run replace.bat, the replaced items_game.txt will be output to items_game_output/ folder.

(Sorry for my bad english.)
