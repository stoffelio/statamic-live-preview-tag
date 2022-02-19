# Statamic Live Preview Tag

> Adds an Antlers tag to easily show or hide parts of your template when viewing the page in Statamic's live preview mode.

## Purpose

Allows you to exclude things like tracking scripts or even parts of your content in live view.

## How to Install

You can search for this addon in the `Tools > Addons` section of the Statamic control panel and click **install**, or run the following command from your project root:

``` bash
composer require stoffelio/statamic-live-preview-tag
```

## How to Use

Simply check if the request is a live preview using the tag:

```
{{ if {is_live_preview} }}
    this will be shown only in live preview
{{ else }}
    this will be hidden in live preview
{{ /if }}
```
