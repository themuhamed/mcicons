<div align="center">
    <h2>🌐 Official Website – <a href="https://mcicons.dev" target="_blank">mcicons.dev</a></h2>
    <p>Explore all icons, try live previews, use the CDN, and more!</p>
    <a href="https://mcicons.dev">
        <img src="https://mcicons.dev/img/mcicons.png" alt="McIcons Logo" width="300px"/>
    </a>
    <p align="center">
        <a href="https://mcicons.dev" style="text-decoration: none;">
            <img src="https://img.shields.io/badge/Visit-Site-green?style=for-the-badge&logo=google-chrome" alt="Visit Site">
        </a>
    </p>
</div>

<p align="center">
    <a href="https://github.com/themuhamed/mcicons"><img src="https://img.shields.io/github/v/release/themuhamed/mcicons?style=flat-square" alt="Latest Release"></a>
    <a href="https://github.com/themuhamed/mcicons"><img src="https://img.shields.io/github/repo-size/themuhamed/mcicons?style=flat-square" alt="Repo Size"></a>
    <a href="https://github.com/themuhamed/mcicons/blob/main/LICENSE"><img src="https://img.shields.io/badge/License-MIT-blue.svg" alt="License"></a>
    <a href="https://packagist.org/packages/themuhamed/mcicons"><img src="https://img.shields.io/packagist/dt/themuhamed/mcicons?style=flat-square" alt="Packagist Downloads"></a>
</p>

<h1 align="center">McIcons – Minecraft UI Icon Library</h1>

<p align="center">
    A handcrafted icon system for the Minecraft aesthetic.<br/>
    Over 1300+ pixel-style PNG icons, pure CSS integration, and CDN support for any PHP, Laravel, or web project.
</p>

---

## 🚀 Installation

```bash
composer require themuhamed/mcicons
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

## 🌐 CDN (Recommended)

Add this line to your `<head>` tag to use McIcons via CDN:

```html
<link rel="stylesheet" href="https://cdn.mcicons.dev/releases/v1.0.0/css/all.css">
```

Then use icons like this:

```html
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
- CDN access
- Usage instructions
- Ready-to-copy code

---

## 🧑‍💻 Author

Developed by [Muhamed](https://github.com/themuhamed)  
📧 [juniorhmd@pm.com](mailto:juniorhmd@pm.com)

---

## 📦 Coming Soon

- NPM package support

---

## 📄 License

McIcons is open-source and licensed under the [MIT License](https://opensource.org/licenses/MIT).

---

<p align="center">
   <strong>If you love McIcons, star it on GitHub ⭐</strong>
</p>
