@echo off

echo Starting replace....

:: the path of items_game_live.txt
SET items_game_live_path = ./items_game_live_input/items_game_live.txt

:: offical items_game.txt
SET items_game_path = ./items_game.txt

:: the path of output after replace
SET output_path = ./items_game_output/items_game.txt

:: Edit the path to your PHP install dir
"PHP INSTALL DIR HERE" -f "%~dp0items_game_replacer.php" %items_game_path % %items_game_live_path % %output_path %

echo Replace done!

pause