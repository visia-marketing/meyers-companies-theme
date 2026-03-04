# Font Awesome 6 Standardization Guide

## Overview
This theme uses **Font Awesome 6.5.2** loaded via CDN for consistent icon management across all pages and components.

**CDN**: `https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css`

## Font Awesome 6 Syntax

Font Awesome 6 uses a different class naming convention than FA 5. Always use these updated classes:

### Available Icon Styles (Free Version)

| Style | Class | Weight | Usage |
|-------|-------|--------|-------|
| Solid | `fa-solid` | 900 (bold) | Default - use for most icons |
| Regular | `fa-regular` | 400 (light) | Alternative lighter weight |

### Icon Class Format
```html
<!-- Syntax: <i class="[style] fa-[icon-name]"></i> -->
<i class="fa-solid fa-arrow-right"></i>
<i class="fa-regular fa-search"></i>
<i class="fa-solid fa-chevron-right"></i>
```

## ❌ DO NOT Use (Font Awesome 5 Syntax)
```html
<!-- INCORRECT - These are FA 5 classes and won't work properly -->
<i class="fas fa-arrow-right"></i>     ✗ Use fa-solid instead
<i class="far fa-search"></i>          ✗ Use fa-regular instead
<i class="fal fa-icon"></i>            ✗ Light requires FA Pro
<i class="fab fa-facebook"></i>        ✗ Brands work but use fa-brands for clarity
```

## Usage Examples

### In HTML/PHP Templates
```php
<!-- Search icon (regular weight) -->
<button class="button"><i class="fa-regular fa-search"></i></button>

<!-- Arrow icon (solid weight) -->
<a href="#" class="read-more">
  Read More <i class="fa-solid fa-arrow-right"></i>
</a>

<!-- Tab icon (solid weight) -->
<div class="accordion-header">
  <i class="fa-solid fa-chevron-right"></i> Accordion Title
</div>
```

### CSS Pseudo-Elements (SCSS)
When you need to add icons via CSS pseudo-elements, use the helper mixins:

```scss
// Import already happens in main.scss
@import "common/fontawesome-helpers";

.my-element::before {
  @include fa-solid;
  content: "\f054"; // Font Awesome icon unicode
}

.my-element::after {
  @include fa-regular;
  content: "\f002"; // Search icon unicode
}
```

## Icon Reference
To find icon names and their CSS classes:
- **Main Site**: https://fontawesome.com/icons
- **Search**: Use the search field to find the icon you need
- **Format**: Use the FA 6 syntax (e.g., `fa-solid fa-arrow-right`)

## Styling Icons

### Size
Use Font Awesome size classes:
```html
<i class="fa-solid fa-icon fa-2x"></i>  <!-- 2x size -->
<i class="fa-solid fa-icon fa-3x"></i>  <!-- 3x size -->
<i class="fa-solid fa-icon fa-lg"></i>  <!-- Large -->
```

### Animations
```html
<i class="fa-solid fa-spinner fa-spin"></i>          <!-- Spinning -->
<i class="fa-solid fa-circle-notch fa-spin"></i>    <!-- Alternative spin -->
<i class="fa-solid fa-heart fa-beat"></i>           <!-- Beating -->
<i class="fa-solid fa-triangle-exclamation fa-shake"></i> <!-- Shake -->
```

### Colors
Use existing utility classes or add custom styling:
```html
<i class="fa-solid fa-check" style="color: green;"></i>
<i class="fa-solid fa-times" style="color: red;"></i>
```

## Configuration

### SCSS Variables
- **Font Family**: `$fontawesome: "Font Awesome 6 Free";` (in `common/_variables.scss`)
- **Helpers**: Located in `assets/src/styles/common/_fontawesome-helpers.scss`

### Enqueue Location
Font Awesome CDN is enqueued in `lib/setup.php`:
```php
wp_enqueue_style('font-awesome-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', false, null);
```

## Upgrading Font Awesome Version
To update the Font Awesome version:

1. Update the CDN URL in `lib/setup.php`
2. Visit https://fontawesome.com to check what's new
3. Test all icon names still work (they usually do)
4. Update documentation if new features are available

## Common Issues

### Icons not displaying
- **Check**: Are you using FA 5 syntax (fas, far) instead of FA 6 (fa-solid, fa-regular)?
- **Check**: Did you forget the style prefix? (e.g., missing `fa-solid` or `fa-regular`)
- **Check**: Is the icon name spelled correctly?
- **Fix**: Use Font Awesome search tool: https://fontawesome.com/icons

### Icon spacing/alignment issues
Wrap icons in a container with padding or use CSS utilities:
```html
<button>
  <i class="fa-solid fa-search"></i>
  <span style="margin-left: 0.5em;">Search</span>
</button>
```

### Pro Icons
Font Awesome 6 Free version only includes Solid and Regular styles. Pro icons (Light, Thin) require:
- Font Awesome Pro license
- Update CDN URL to Pro version
- Additional setup configuration

---

**Last Updated**: March 2026
**Font Awesome Version**: 6.5.2
**Theme**: Elkhart Plastics WordPress Theme
