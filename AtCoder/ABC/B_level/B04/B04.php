<?php
/*
高橋君は 4 x 4 マスの盤面を見つけました。
各マスには .ox のいずれかの文字が書かれています。
彼はこの盤面を回転させた後、どういった状態になるのか気になりました。
盤面を正面から見たときの状態が与えられるので、180 度回転させた後の盤面を出力してください。

[やりたいこと]
・入力値を受け取ること
・受け取った入力値を逆から出力する
・str_splitを使用する
*/

for($i = 0; $i < 4; $i++) {
	$a[] = trim(fgets(STDIN));
}
foreach(array_reverse($a) as $v){
	echo strrev($v), "\n";
}