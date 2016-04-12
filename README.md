## Description

Expressionengine plugin which detects browser based on HTTP_USER_AGENT.

### Disclaimer

There are a few similar plugins floating around out in the wild, some of which detect a larger number of browsers.

I've tailored this plugin for my own particular needs, with a focus on identifying Internet Explorer versions, while limiting Webkit/Gecko/Presto detection to popular browsers only. I simply have no need to identify browsers like Camino, MicroB, or iCab, and am okay with these being reported by their WebKit and Gecko fallbacks.

If you need more granular detection for obscure browsers, feel free to fork this plugin or look at some of the other options out there.

### Installation

Copy the "browser_detect" folder to your /system/expressionengine/third_party (EE2) or /system/user/addons (EE3) folder.

### Usage

Use the {exp:browser_detect:browser} tag to output browser identifier.

Use the {exp:browser_detect:family} tag output browser family.

Generally speaking, I tend to use this plugin in conjunction with standard EE conditionals to control the loading of browser specific stylesheets and javascript.

#### Examples

```
{if '{exp:browser_detect:browser}' == 'IE8'}
	...
{/if}
```

```
{if '{exp:browser_detect:family}' == 'IE'}
	...
{/if}
```

### Browsers

#### Internet Explorer
* IE11 (relies on Trident/7.0 in user agent string for the time being to get around Microsoft's deliberate attempt to make IE11 appear as Gecko)
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
