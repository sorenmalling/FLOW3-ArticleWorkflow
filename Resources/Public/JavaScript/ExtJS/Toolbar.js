Ext.ns('Package.ArticleWorkflow');

Package.ArticleWorkflow.Toolbar = Ext.extend(Ext.Menu, {

	renderTo : 'left-bar',
	defaultType: 'button',

	initComponent : function() {
		var config = {
			cls : 'package-articleworkflow-toolbar',
			//items : this.getToolbarItems()
			items : [{
				text : 'noget'
			},'-',{
				text : 'noget andet'
			}]
		};
		Ext.apply(this, config);
		console.log(this);
		Package.ArticleWorkflow.Toolbar.superclass.initComponent.call(this);
	},

	getToolbarItems : function() {
		
	}

});

Ext.reg('Package.ArticleWorkflow.Toolbar', Package.ArticleWorkflow.Toolbar);

//var some = new Package.ArticleWorkflow.Toolbar;

//var toolbar = new Ext.Toolbar({
//	renderTo : 'topbar',
//	width: 600,
//	height: 100,
//	defaultType : 'button',
//	defaults : {
//		xtype : 'button'
//	},
//	items : [{
//			xtype: 'button',
//			text : 'menu 1'
//		},{
//			xtype: 'button'
//		}]
//});
//
//toolbar.show();