# 開発内容
顧客管理（本人確認書類等認証機能の模倣）

# 要件
- ユーザが申し込みできること
- 本人確認書類のアップロードができること
- 管理者がユーザ情報の閲覧できること

# 機能
### ●管理者
- ログイン
- 顧客情報一覧表示
- 顧客情報編集・削除

### ●ユーザ
- ユーザ情報登録
- ファイルアップロード
- メール受信

# システム構成図
![システム構成図](https://github.com/tomdog3/sample/blob/master/tomdoc3.png)

# 開発環境
- MacOS Sierra 10.12.6
- NetBeans 8.2
- PHP 5.4
- FuelPHP 1.8
- MAMP 4.2.1
- Elasticsearch 6.1.1
- Supervisord 3.3.3
- Redis 4.0.6

# モジュールパス
APPPATH=fuel/app/

### ●管理者
APPPATH/modules/admin

### ●ユーザ
APPPATH/modules/user

---

# 備忘録
## 2017/12/19(火)時点の考え
- ログインなど機能の充実より、メインとなる画面を作成後、画面のUIを少し充実させる
- fuelphpフレームワークの簡単な機能をたくさん使うこと
- DBの最適化は後回し、登録、抽出ができれば一旦OK
- 導入や機能利用の学習コストに時間掛かりそうなため、とりあえず進めること。

## 2017/12/29(金)
- システム構成図、開発環境に開発ツール名を追記（versionは後程追記）

## 2017/01/08(月)
- ユーザ一覧画面修正（Presenter利用）

## 2017/01/11(木)
- supervisord導入
- Elasticserch導入
- redis導入、session管理にredisを利用
- ログイン画面実装（Authパッケージ->Simpleauth利用）

---
