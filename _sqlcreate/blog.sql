create table yii2_category(
	category_id int unsigned auto_increment comment 'pk',
	category_name VARCHAR(32) not null default '' comment '分类',
	parent_id int unsigned not null default 0 comment '上级',
	primary key (category_id),
	index(parent_id)
)charset=utf8;

#用户表
create table yii2_user(
	user_id int unsigned not null auto_increment comment 'user_id',
	username VARCHAR(64) not null DEFAULT  '' comment '用户名',
	password char(32) not null DEFAULT  '' comment '密码MD5',
	nickname VARCHAR(64) not null DEFAULT '' comment '昵称',
	logo VARCHAR(255) not null DEFAULT '',
	create_at int not null DEFAULT 0,
	PRIMARY KEY (user_id)
)charset=utf8;

#文章表
create table yii2_article(
	article_id int unsigned not null auto_increment comment 'ID',
	subject VARCHAR(64) not null default '' comment '文章标题',
	cover VARCHAR(255) not null DEFAULT '' comment '文章封面',
	`summary` VARCHAR(255) not null DEFAULT '' comment '文章摘要',
	`content` text comment '文章内容',
	`status` enum('publish','save') not null default 'publish' comment 'P发布&S保存',
	`create_at` int not null default 0 comment '创建时间',
	`is_delete` tinyint unsigned not null default 0 comment '文章是否被删除',
	`category_id` int unsigned null comment '文章所属分类ID',
	`user_id` int unsigned null comment '文章作者id',
	constraint `category` foreign key (category_id) references yii2_category (category_id) on delete set null on update cascade,
	foreign key (user_id) references yii2_user (user_id) on delete set null on update cascade,
	primary key (article_id)
)charset=utf8;



