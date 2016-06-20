百度推送yii2封装
==========
百度推送yii2封装 只是抽出config而已

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist baidupusher/yii2-baidupusher "*"
```

or add

```
"baidupusher/yii2-baidupusher": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :
追加到components中

```
'push'=>[
			'class'=>'daidai118\baidupusher\PushSDK',
			'config'=>[
				/*
				 *  const LOG_LEVEL_DEV = 0; // 开发状态, rd开发时使用, 最详细 log. 发布后被移除
					const LOG_LEVEL_TRACE = 1; // 开发者开发时状态,隐藏rd开发时的细碎信息
					const LOG_LEVEL_ONLINE = 2; // 开发者线上使用, 只有fault和warn
					const LOG_LEVEL_ONLINE_FAULT = 3; // 开发者线上使用, 只有fault
					const LOG_LEVEL_ONLINE_SILENCE = 4; // 静默.
				 */
				'default_secretkey'=>'',
				'default_apiKey'=>'',
				//3安卓 4 ios
				'default_devicetype'=>3,
				'SUPPRESS_EXCPTION'=>true,
				'LOG_OUTPUT'=>'stdout',
				'LOG_LEVEL'=>1,
				'HOST'=>'http://api.tuisong.baidu.com/rest/3.0/',
				'SIGN_EXPIRES'=>0,
			],
		]
```

Yii::$app->push->pushMsgToSingleDevice($channelId,$message,$opts);