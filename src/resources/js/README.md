
## ディレクトリ構成

```bash:ディレクトリ構成
Root::
├─build
├─config
├─dist
├─static
├─test
├─src
│  ├─assets
│  ├─components
|  |  ├-globals
│  │  ├─mixin
│  │  ├─partial
│  │  │  ├─modal
│  │  │  └─plugin
│  │  └─pages
│  │       ├─member
│  │       ├─register
│  │       └─.....(etc)
│  ├─router
│  ├─setup
│  └─store
```


## ルートディレクトリ
**/build**
webpackのconfigファイル格納

**/config**
webpackで使う定数（？）関係の設定ファイル格納

**/dist**
buildしたときにファイルが出力されるディレクトリ。
このディレクトリである必要はありませんが、webpackテンプレート標準ではここに設定されています。

**/static**
Vue.jsで管理されない静的ファイル群。
主にクライアントがファイルを自由に置く領域として用意しています。

**/test**
ユニットテスト、E2Eテストを格納。

##srcディレクトリ以下
**/assets**
webpackで結合されるファイルを格納。
SASSファイルや、画像、Webフォントなどを入れています。

**/components**
Vue.jsの単一ファイルコンポーネント群。
単一ファイルコンポーネントは

* globals: ページに依存しないコンポーネント ex) ヘッダー, フッター
* pages:   ページそのもの
* partials:複数ページで使い回すパーツ
* mixin:   mixin

という３つの用途があるので、それぞれフォルダを分けています。
基本的にpagesに入っているファイル数＝ページ数になります。
ヘッダーやフッターなど共通してるものはpartialに。


## 参考URL
- [大規模Vue.jsアプリを開発するときのディレクトリ構成考えた](https://qiita.com/wonohe/items/529321475d68b9191036)




