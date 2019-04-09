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

ALTER TABLE `tasks`
    MODIFY COLUMN `images`  json NULL DEFAULT '' AFTER `content`;


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

