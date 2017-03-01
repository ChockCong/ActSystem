var navs = [{
	"title": "活动管理",
	"icon": "fa-cubes",
	"spread": true,
	"children": [{
		"title": "活动发布",
		"icon": "&#xe641;",
		"href": "Admin_setact.php"
	}, {
		"title": "通知发布",
		"icon": "&#xe63c;",
		"href": "Admin_setnotice.php"
	}, {
		"title": "活动总览",
		"icon": "fa-tasks",
		"href": "Admin_browseact.php"
	}, {
		"title": "报名审核",
		"icon": "fa-edit",
		"href": "Admin_judge.php"
	}, {
		"title": "活动审核",
		"icon": "fa-check",
		"href": "Admin_approveact.php "
	}]
}, {
	"title": "学生管理",
	"icon": "fa-cogs",
	"spread": false,
	"children": [{
		"title": "学生查询",
		"icon": "fa-navicon",
		"href": "Admin_findstu.php "
	}, {
		"title": "添加学生",
		"icon": "fa-group",
		"href": "Admin_addstu.php "
	}]
}, {
	"title": "学院管理",
	"icon": "fa-address-book",
	"href": "Admin_managedepa.php ",
	"spread": false,
}];