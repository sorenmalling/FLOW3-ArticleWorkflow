Ext.ns('Package.ArticleWorkflow');

Package.ArticleWorkflow.loginDialog = Ext.extend(Ext.Window, {

	modal : true,
	height: 300,
	width: 400,

	initComponent : function() {
	},

	constructor : function(config) {
		this.listeners = config.listeners ? config.listeners : config;

		Ext.apply(this, config);
		Package.ArticleWorkflow.loginDialog.superclass.constructor.call(this);
	}

});

Ext.preg('Package.ArticleWorkflow.loginDialog', Package.ArticleWorkflow.loginDialog);