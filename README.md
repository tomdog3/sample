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
- 会員情報登録
- ファイルアップロード

### 機能画面のキャプチャはWiki参照
https://github.com/tomdog3/sample/wiki

# システム構成図
![システム構成図](https://user-images.githubusercontent.com/34684487/34906148-5d44ca98-f8aa-11e7-805a-6bc5e0b9cfd9.png)


# 開発環境/ツール
- MacOS Sierra 10.12.6
- NetBeans 8.2
- PHP 5.4
- FuelPHP 1.8
- MAMP 4.2.1
- Elasticsearch 6.1.1
- Supervisord 3.3.3
- Redis 4.0.6
- Kibana 6.1.1

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
- fuelphpフレームワークの簡単な機能から使うこと
- DBは、登録、抽出ができれば一旦OK
- 導入や機能利用の学習コストに時間掛かりそうなため、とりあえず進めること。

## 2017/12/29(金)
- システム構成図、開発環境に開発ツールを追記

## 2018/01/12(金)
- ユーザ一覧画面修正（Presenter利用）
- Elasticserch導入(アプリログの取り込みは未実現)、Kibanaと連携
- Redis導入、session管理にredisを利用
- Supervisord導入、ElasticsearchやRedisの起動設定
- ログイン画面実装（Authパッケージ->Simpleauth利用）

## 2018/01/13(土)
- Wikiを作成->キャプチャを添付
- システム構成図にKibanaを追記

## 2018/01/14(日)
- Session制御の修正

---

## 2018/02/01(木)
- Apache → nignx+php-fastcgiの構成に切り替え
  [完了]構成の切り替え
  [未完]assets配下のcssの読み込み、DB接続 → nignxのconfigファイルに設定する方法を調査中
  
- phpmdやphpcpd、PHP Unitなどを使ったビルド環境構築
  [完了]コマンドベースでの利用
  [未完]phpingを用いたビルド環境構築
  
- Elasticsearchから抽出したデータのレポート画面実装(グラフ表示やテーブル表示)
  [完了]phpからElasticsearchへの接続
  [未完]データの利用（グラフやテーブル表示）
