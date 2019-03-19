ALTER TABLE `users`
    ADD COLUMN `mobile`  varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '手机号码' AFTER `country_id`;
   ADD COLUMN `wechat`  varchar(255) NOT NULL AFTER `mobile`,
    ADD COLUMN `youtube`  varchar(255) NOT NULL AFTER `wechat`,
    ADD COLUMN `facebook`  varchar(255) NOT NULL AFTER `youtube`,
    ADD COLUMN `twitter`  varchar(255) NOT NULL AFTER `facebook`;



ALTER TABLE `users`
    ADD COLUMN `country_id`  tinyint(2) NOT NULL DEFAULT 0 COMMENT '国家id' AFTER `password_origin`;
