
## Description

Expressionengine plugin which detects browser based on HTTP_USER_AGENT.

### Disclaimer

There are a few similar plugins floating around out in the wild, some of which detect a larger number of browsers.

I've tailored this plugin for my own particular needs, with a focus on identifying Internet Explorer versions, while limiting Webkit/Gecko/Presto detection to popular browsers only. I simply have no need to identify browsers like Camino, MicroB, or iCab, and am okay with these being reported by their WebKit and Gecko fallbacks.

If you need more granular detection for obscure browsers, feel free to fork this plugin or look at some of the other options out there.

### Installation

Copy the "browser_detect" folder to your /system/expressionengine/third_party folder.

### Usage

Use the `{exp:browser_detect}` tag (single) in your ExpressionEngine templates to output browser identifier.

Generally speaking, I tend to use this plugin in conjunction with standard EE conditionals to control the loading of browser specific stylesheets and javascript.

#### Example

```
{if '{exp:browser_detect}' == 'IE8'}
	...
{/if}
```

### Browsers

#### Internet Explorer
* IE11 (relies on Trident/7.0 in user agent string for the time being to get around Microsoft's deliberate attemt to make IE11 appear as Gecko)
* IE10
* IE9
* IE8
* IE7
* IE6
* IE (used as a fallback)

#### WebKit
* Crome
* Safari
	* iPad
	* iPhone
* WebKit (used as a fallback)

#### Gecko
* Firefox
* Gecko (used as a fallback)

#### Presto
* Presto (all Opera/Presto browsers will return Presto)