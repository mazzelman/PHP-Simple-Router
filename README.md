Hi,

this is a super simple php router. The routes live inside the index.php. You have a few views where you can pass a title or enable the sidebar. And there is a layout file. So that you only have to edit the files in the views folder. Happy hacking! 🖖

![website with images](/assets/images/psr.png)

First step, clone the repo:

```bash
git clone git@github.com:mazzelman/PHP-Simple-Router.git
```

Second step, put the folder where you like. Inside the folder you can use the php development server.

```bash
php -S localhost:8000
```

then open the browser under http://localhost:8000

The folder structure looks like this:

```bash
.
├── README.md
├── assets
│   ├── css
│   │   └── main.css
│   └── images
│       ├── favicon.ico
│       └── psr.png
├── index.php
├── partials
│   ├── footer.php
│   ├── header.php
│   └── sidebar.php
└── views
    ├── 404.php
    ├── about.php
    ├── home.php
    ├── layout.php
    └── work.php
```
