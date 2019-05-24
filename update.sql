ALTER TABLE `users`
    ADD COLUMN `mobile`  varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '手机号码' ,
    ADD COLUMN `wechat`  varchar(255) NOT NULL AFTER `mobile`,
    ADD COLUMN `youtube`  varchar(255) NOT NULL AFTER `wechat`,
    ADD COLUMN `facebook`  varchar(255) NOT NULL AFTER `youtube`,
    ADD COLUMN `twitter`  varchar(255) NOT NULL AFTER `facebook`,
    ADD COLUMN `head_img`  varchar(255) NOT NULL AFTER `name`,
    ADD COLUMN `country_id`  tinyint(2) NOT NULL DEFAULT 0 COMMENT '国家id' AFTER `password_origin`;

ALTER TABLE `users`
    MODIFY COLUMN `head_img`  varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' AFTER `name`,
    MODIFY COLUMN `wechat`  varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' AFTER `mobile`,
    MODIFY COLUMN `youtube`  varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' AFTER `wechat`,
    MODIFY COLUMN `facebook`  varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' AFTER `youtube`,
    MODIFY COLUMN `twitter`  varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' AFTER `facebook`;



 ALTER TABLE `user_images` RENAME `images`;
 ALTER TABLE `tasks`
ADD COLUMN `cover`  varchar(255) NULL AFTER `user_id`,
ADD COLUMN `images`  varchar(255) NULL AFTER `cover`;

ALTER TABLE `tasks`
    ADD COLUMN `country_id`  int NOT NULL DEFAULT 0 AFTER `reply`;

CREATE TABLE `email` (
                         `id` int(11) NOT NULL AUTO_INCREMENT,
                         `email` varchar(255) DEFAULT '',
                         `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
                         `updated_at` timestamp NULL DEFAULT NULL,
                         PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

ALTER TABLE `tasks`
    ADD COLUMN `sex`  tinyint(1) NOT NULL DEFAULT 0 COMMENT '1 男  2 女' AFTER `reply`;

ALTER TABLE `users`
    ADD COLUMN `sex`  tinyint(1) NOT NULL DEFAULT 0 COMMENT '1 男  2 女' ,
    ADD COLUMN `is_married`  tinyint(1) NOT NULL DEFAULT 0 COMMENT '' ,
    ADD COLUMN `birth_day`  date DEFAULT NULL   ,
    ADD COLUMN `line`  varchar(255) NULL DEFAULT '' AFTER `status`;

ALTER TABLE `users_relations`
    ADD COLUMN `message`  text NULL AFTER `status`;

ALTER TABLE `users`
    ADD COLUMN `ip`  varchar(255) NOT NULL AFTER `updated_at`;

-- 新增三个表
CREATE TABLE `tags` (
                        `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                        `name` varchar(50) NOT NULL DEFAULT '',
                        `created_at` timestamp NULL DEFAULT NULL,
                        `updated_at` timestamp NULL DEFAULT NULL,
                        PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `videos` (
                          `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                          `title` varchar(255) NOT NULL DEFAULT '',
                          `img` varchar(255) NOT NULL COMMENT '首页封面',
                          `keywords` varchar(255) NOT NULL,
                          `url` varchar(255) NOT NULL COMMENT '第三方播放链接',
                          `video_id` varchar(25) NOT NULL DEFAULT '',
                          `video` varchar(255) NOT NULL,
                          `video1` varchar(255) NOT NULL DEFAULT '',
                          `created_at` timestamp NULL DEFAULT NULL,
                          `updated_at` timestamp NULL DEFAULT NULL,
                          PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;


CREATE TABLE `videos_tags` (
                               `video_id` int(11) unsigned NOT NULL DEFAULT 0,
                               `tag_id` int(11) unsigned NOT NULL DEFAULT 0,
                               `created_at` timestamp NULL DEFAULT NULL,
                               `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 更改逻辑
update videos set video =CONCAT('https://ap1-ws.yoipu.com/',video_id,'/preview/pv.m3u8' );

ALTER TABLE `users`
    ADD COLUMN `qq`  varchar(255) NOT NULL DEFAULT '' AFTER `twitter`,
    ADD COLUMN `is_recommend`  tinyint(1) NOT NULL DEFAULT 0 AFTER `status`;

ALTER TABLE `users`
    ADD COLUMN `images`  varchar(255) NOT NULL DEFAULT '' AFTER `line`;






