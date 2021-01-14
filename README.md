# Magento 2 Widget for inline links without surrounding HTML

## Description
This module delivers three widgets to output links without surrounding HTML.

So you can use these generated links in any context you want, without any design break.

## Usage

### Button "Insert widget"
1. use the "Insert widget"-button to add a new widget into your editor
2. select one of the widgets which is suffixed with `(inline-link)`
3. select your entity (product, category, cms-page)
4. that's it.

### Editor (self-written)
Use this one of the following code snippet in your editor

#### Product
```
{{widget type="Webidea24\InlineLinkWidget\Block\Link\Product" id_path="product/XXXX"}}
```
replace `XXXX` with the product-id

#### Category
```
{{widget type="Webidea24\InlineLinkWidget\Block\Link\Category" id_path="category/XXXX"}}
```
replace `XXXX` with the category-id
