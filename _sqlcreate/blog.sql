create table yii2_category(
	category_id int unsigned auto_increment comment 'pk',
	category_name VARCHAR(32) not null default '' comment '分类',
	parent_id int unsigned not null default 0 comment '上级',
	primary key (category_id),
	index(parent_id)
)charset=utf8;