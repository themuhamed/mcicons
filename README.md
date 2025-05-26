
<div align="center">
    <a href="https://mcicons.dev">
        <img src="https://mcicons.dev/img/mcicons.png" alt="McIcons Logo" width="300px"/>
    </a>
</div>

<p align="center">
    <a href="https://github.com/themuhamed/mcicons"><img src="https://img.shields.io/github/v/release/themuhamed/mcicons?style=flat-square" alt="Latest Release"></a>
    <a href="https://github.com/themuhamed/mcicons"><img src="https://img.shields.io/github/repo-size/themuhamed/mcicons?style=flat-square" alt="Repo Size"></a>
    <a href="https://github.com/themuhamed/mcicons/blob/main/LICENSE"><img src="https://img.shields.io/github/license/themuhamed/mcicons?style=flat-square" alt="License"></a>
    <a href="https://packagist.org/packages/themuhamed/mcicons"><img src="https://img.shields.io/packagist/dt/themuhamed/mcicons?style=flat-square" alt="Packagist Downloads"></a>
</p>

<h1 align="center">McIcons – Minecraft UI Icon Library</h1>

<p align="center">
    A handcrafted icon system for the Minecraft aesthetic. <br/>
    Over 1300+ pixel-style PNG icons, delivered with pure CSS classes for any PHP, Laravel, or web project.
</p>

---

## 🚀 Installation

```bash
composer require muhammed/mcicons
```

Then publish the assets in Laravel:

```bash
php artisan vendor:publish --tag=mcicons-assets
```

Or copy manually:

```bash
mkdir -p public/vendor/mcicons
cp -r vendor/themuhamed/mcicons/resources/css/mcicons.css public/vendor/mcicons/
cp -r vendor/themuhamed/mcicons/public/icons public/vendor/mcicons/
```

---

## 💡 Usage

Add to your HTML or Blade template:

```html
<link rel="stylesheet" href="/vendor/mcicons/css/mcicons.css">

<i class="mc mc-diamond-sword mc-2xl"></i>
<i class="mc mc-anvil mc-xl"></i>
<i class="mc mc-apple mc-sm"></i>
```

---

## 📂 Structure

```
mcicons/
├── public/icons/           # 1300+ PNGs
├── resources/css/          # mcicons.css
├── src/                    # Laravel ServiceProvider
├── composer.json
└── README.md
```

---

## 📏 Icon Sizes

| Class       | Size     |
|-------------|----------|
| `.mc-sm`    | 1rem     |
| `.mc`       | 1.5rem   |
| `.mc-xl`    | 2rem     |
| `.mc-2xl`   | 2.5rem   |
| `.mc-3xl`   | 3rem     |
| `.mc-4xl`   | 4rem     |
| `.mc-5xl`   | 5rem     |

---

## 🖥️ Official Website

👉 Visit [https://mcicons.dev](https://mcicons.dev) for:
- Icon browser
- Live previews
- CDN access (coming soon)

---

## 🧑‍💻 Author

Developed by [Muhamed](https://github.com/themuhamed)  
📧 [juniorhmd@pm.com](mailto:juniorhmd@pm.com)

---

## 📄 License

McIcons is licensed under the [MIT License](LICENSE)

---

<p align="center">
   <strong>If you love McIcons, star it on GitHub ⭐</strong>
</p>