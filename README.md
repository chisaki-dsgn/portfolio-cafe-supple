# 架空カフェ[SUPPLE]Webサイト制作
架空カフェ[SUPPLE]のブランドサイトです。

## 概要
- **制作内容**：提供されたデザインカンプを元にしたWebサイトのコーディング・実装（静的サイト）
- **デザインカンプ出典**：『模写修行』（[https://moshashugyo.com/](https://moshashugyo.com/)）

## 公開URL
**サイトURL**：[https://chisaki-dsgn.github.io/mosya-shugyo_cafe/](https://chisaki-dsgn.github.io/mosya-shugyo_cafe/)

## 制作期間・担当範囲
- **制作期間**：2026年8月31日～9月5日（約20時間）
- **担当範囲**：デザインカンプからのコーディング、JSを使った動きの実装、デプロイ
## ページ構成・実装セクション
- ヘッダー
- トップページ
- コンセプトページ
- メニューページ
- 店舗一覧
- ブログ・ニュース一覧
- ブログ・ニュース記事詳細ページ
- フッター

## 使用技術
- HTML5
- CSS3：Sass / BEM記法 / レスポンシブ対応（768px）
- JavaScript：ヘッダーメニューのスクロールに伴う表示/非表示
- 使用エディター：VS Code 
- Git / GitHub：チーム開発を視野に入れたリポジトリ管理の流れを体験（push / pull request / merge / pull）
- GitHub Pages (ホスティング)

## 制作時の工夫点
- SEOやアクセシビリティに配慮し、セマンティックなマークアップを心掛けました
- 保守性やメンテナンス性を高めるため、Sassのモジュール化とBEM記法を採用しました。
- 実務を想定したGit管理を意識して制作に取り組み、実務でのチーム開発のフローに近づけるようにしました。
- UX向上のためボタンやカードホバー時の自然なアニメーションを設定し、ユーザーが直感的に操作できるよう工夫しました。
- デザインカンプから画像を切り出したあと、画像圧縮ツールでファイルサイズを削減することでページの読み込み速度向上を試みました。
- 

## ディレクトリ構造

```
mosya-shugyo_cafe/
├─ img/
├─ scss/
|   ├── components/
|   |     ├── _button.scss
|   |     └── _hero.scss
|   ├── foundations/
|   |     ├── _variables.scss
|   |     └── _base.scss
|   ├── layout/
|   |     ├── _header.scss
|   |     └── _footer.scss
|   ├── page/
|   |     ├── _top.scss
|   |     ├── _concept.scss
|   |     ├── _menu.scss
|   |     ├── _shoplist.scss
|   |     ├── _archive-blog.scss
|   |     ├── _single-blog.scss
|   |     └──_404.scss
|   └── style.scss
├─ css/
|   └── style.css
├─ js/
|   └── main.js
├─ index.html
├─ concept.html
├─ menu.html
├─ shoplist.html
├─ archive-blog.html
├─ single-blog.html
├─ 404.html
├─ README.md
└─ .gitignore
```

