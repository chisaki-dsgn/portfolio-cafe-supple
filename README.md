# 架空カフェ[SUPPLE]Webサイト制作（WordPressオリジナルテーマ化版）

## 概要
- **制作内容**：[静的サイト版](https://github.com/chisaki-dsgn/mosya-syugyo_cafe)で作成したHTML/CSSをベースに構築したオリジナルテーマ開発です。
- **デザインカンプ出典**：『模写修行』（[https://moshashugyo.com/](https://moshashugyo.com/)）

## 公開URL
**静的サイト**：[https://chisaki-dsgn.github.io/mosha-shugyo_cafe/](https://chisaki-dsgn.github.io/mosha-shugyo_cafe/)

## 管理画面・動作デモ
**[カスタム投稿デモ動画]**
<video src="./media/wp_demo.mp4" controls width="100%"></video>

## 制作期間・担当範囲
- **制作期間**：約14時間（元の静的サイトのコーディング時間を除く）
- **担当範囲**：静的サイトからのオリジナルテーマ開発（WordPress化）/ 追加ページの実装
## ページ構成・実装セクション
- ヘッダー
- トップページ
- コンセプトページ
- メニューページ
- 店舗一覧
- 店舗詳細ページ **（※追加）**
- ブログ・ニュース一覧
- ブログ・ニュース記事詳細ページ
- フッター

## 使用技術
- **HTML5**
- **CSS3**：Sass / BEM記法 / レスポンシブ対応（768px）
- **JavaScript**：ヘッダーメニューのスクロールに伴う表示/非表示
- **Git / GitHub**：チーム開発を視野に入れたリポジトリ管理の流れを体験（Push/Pull Request/Merge/Pull）
- 使用エディター：**VS Code** 
- デザインツール：**Figma**

## 制作時の工夫点
- デザインカンプには収録されていなかった「店舗詳細」ページを自らデザインしてコーディング実装し、カスタム投稿タイプとしてクライアントが編集可能な管理画面を実装。
- ACF(カスタム投稿・フィールド)を使用し、投稿者の入力更新のしやすさに配慮した投稿エリアを作成。
- 投稿タイトルが日本語でも、投稿者にとって難しい設定をしなくても複雑なスラッグになることを防ぐことができるようにスラッグを自動でIDにするフィルターフックを設定。（カスタム投稿）
- `echo`でデータ出力する箇所には`esc_url()`などの適切なエスケープ関数を徹底しセキュリティ面を考慮。 

## ディレクトリ構造

```
portforio-cafe-supple/
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
|   |     ├── _sigle-shoplist.scss
|   |     ├── _archive-blog.scss
|   |     ├── _single-blog.scss
|   |     └── _404.scss
|   └── style.scss
├─ css/
|   └── style.css
├─ js/
|   └── main.js
├─ style.css
├─ functions.php
├─ index.php
├─ header.php
├─ footer.php
├─ front-page.php
├─ page-concept.php
├─ page-menu.php
├─ archive-shoplist.php
├─ single-shoplist.php
├─ home.php
├─ single.php
├─ 404.php
├─ README.md
└─ .gitignore
```

