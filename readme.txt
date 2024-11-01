=== YD Webhook to XML-RPC ===
Contributors: ydubois
Donate link: http://www.yann.com/
Tags: webhook, xmlrpc, xml-rpc, webservice, web-service, hook, callback, webhooks, shopify
Requires at least: 2.9
Tested up to: 3.1
Stable tag: trunk

Description: Simple Webhook to WordPress XML-RPC gateway.

== Description ==

= Implement incoming Webhooks in WordPress =

This plugin implements a simple gateway to transform webhook calls into regular XML-RPC calls.

WordPress has a very comprehensive XML-RPC API. This gateway will automatically accept webhook calls and convert them into XML-RPC.

It listen to Webhooks to trigger XML-RPC methods in WordPress.

It provides a simple short /webhook URL for triggering WordPress events.

From then on you can use the well-known and well-documented native WordPress XMLRPC API to respond to webhooks and implement needed features in your plugins and custom functions.

The incoming webhook POST data payload will be transferred as-is to the XML-RPC method. It should be XML for it to work well.

Needs PHP5.

= Webhook syntax =

If you are using pretty permalinks:

`http://[your-site]/webhook?method=misc.method`

If you are not using permalinks, you need to call the long full url:

`http://[your-site]/wp-content/plugins/yd-webhook-to-xml-rpc/webhook.php?method=misc.method`

replace `misc.method` with any XML-RPC method, either WordPress built-in, or your own, or from a third-party plugin.

= Uses =

This gateway has successfully been used to listen to Shopify webhooks to trigger WordPress events (such as upgrade user status when a purchase has been completed).

= Active support =

Drop me a line on my [YD Webhook to XML-RPC plugin support site](http://www.yann.com/en/wp-plugins/yd-webhook-to-xml-rpc "Yann Dubois' Webhook to XML-RPC plugin") to report bugs, ask for specific feature or improvement, or just tell me how you're using it.

== Installation ==

Wordpress automatic installation is fully supported and recommended.

Needs PHP5.

== Frequently Asked Questions ==

= Where should I ask questions? =

http://www.yann.com/en/wp-plugins/yd-webhook-to-xml-rpc

Use comments.

I will answer only on that page so that all users can benefit from the answer. 
So please come back to see the answer or subscribe to that page's post comments.

= Puis-je poser des questions et avoir des docs en français ? =

Oui, l'auteur est français.
("but alors... you are French?")

= What is your e-mail address? =

It is mentioned in the comments at the top of the main plugin file. However, please prefer comments on the plugin page (as indicated above) for all non-private matters.

== Screenshots ==

Not yet.

== Revisions ==

* 0.1.0. Initial beta release of 2011/04/29

== Changelog ==

= 0.1.0 =
* Initial beta release

== Upgrade Notice ==

= 0.1.0 =
* No specifics. Automatic upgrade works fine.

== Did you like it? ==

Drop me a line on http://www.yann.com/en/wp-plugins/yd-webhook-to-xml-rpc

And... *please* rate this plugin --&gt;