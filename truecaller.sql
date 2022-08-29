/*
 Navicat MySQL Data Transfer

 Source Server         : Mysql
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : truecaller

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 17/05/2022 13:24:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for block list
-- ----------------------------
DROP TABLE IF EXISTS `block list`;
CREATE TABLE `block list`  (
  `blockId` int NOT NULL AUTO_INCREMENT,
  `blockName` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `blockPhone` int NOT NULL,
  PRIMARY KEY (`blockId`) USING BTREE,
  INDEX `blockname`(`blockName` ASC) USING BTREE,
  INDEX `blockphone`(`blockPhone` ASC) USING BTREE,
  CONSTRAINT `blockname` FOREIGN KEY (`blockName`) REFERENCES `known/unknown callers` (`callerName`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `blockphone` FOREIGN KEY (`blockPhone`) REFERENCES `known/unknown callers` (`callerPhone`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of block list
-- ----------------------------

-- ----------------------------
-- Table structure for calls
-- ----------------------------
DROP TABLE IF EXISTS `calls`;
CREATE TABLE `calls`  (
  `call_Id` int NOT NULL AUTO_INCREMENT,
  `callerId` int NOT NULL,
  `userId` int NOT NULL,
  `incomingCall` int NOT NULL,
  `outcomingCall` int NOT NULL,
  PRIMARY KEY (`call_Id`) USING BTREE,
  INDEX `callid`(`callerId` ASC) USING BTREE,
  INDEX `userid`(`userId` ASC) USING BTREE,
  CONSTRAINT `callid` FOREIGN KEY (`callerId`) REFERENCES `known/unknown callers` (`callerId`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `userid` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of calls
-- ----------------------------

-- ----------------------------
-- Table structure for chats
-- ----------------------------
DROP TABLE IF EXISTS `chats`;
CREATE TABLE `chats`  (
  `chatId` int NOT NULL AUTO_INCREMENT,
  `chatting` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `chatName` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `callerId` int NOT NULL,
  `userId` int NOT NULL,
  PRIMARY KEY (`chatId`) USING BTREE,
  INDEX `caller`(`callerId` ASC) USING BTREE,
  INDEX `user`(`userId` ASC) USING BTREE,
  CONSTRAINT `caller` FOREIGN KEY (`callerId`) REFERENCES `known/unknown callers` (`callerId`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `user` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of chats
-- ----------------------------

-- ----------------------------
-- Table structure for contact list
-- ----------------------------
DROP TABLE IF EXISTS `contactList`;
CREATE TABLE `contactList`  (
  `listId` int NOT NULL AUTO_INCREMENT,
  `callerName` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `callerPhone` int NOT NULL,
  PRIMARY KEY (`listId`) USING BTREE,
  INDEX `callername`(`callerName` ASC) USING BTREE,
  INDEX `callerphone`(`callerPhone` ASC) USING BTREE,
  CONSTRAINT `callername` FOREIGN KEY (`callerName`) REFERENCES `known/unknown callers` (`callerName`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `callerphone` FOREIGN KEY (`callerPhone`) REFERENCES `known/unknown callers` (`callerPhone`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of contact list
-- ----------------------------

-- ----------------------------
-- Table structure for known/unknown callers
-- ----------------------------
DROP TABLE IF EXISTS `known/unknown callers`;
CREATE TABLE `known/unknown callers`  (
  `callerId` int NOT NULL AUTO_INCREMENT,
  `callerName` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `callerPhone` int NOT NULL,
  PRIMARY KEY (`callerId`) USING BTREE,
  UNIQUE INDEX `phone`(`callerPhone` ASC) USING BTREE,
  INDEX `callerName`(`callerName` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of known/unknown callers
-- ----------------------------

-- ----------------------------
-- Table structure for records
-- ----------------------------
DROP TABLE IF EXISTS `records`;
CREATE TABLE `records`  (
  `recordId` int NOT NULL AUTO_INCREMENT,
  `recordName` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `recordStartTime` datetime NOT NULL,
  `recordEndTime` datetime NOT NULL,
  PRIMARY KEY (`recordId`) USING BTREE,
  INDEX `recordname`(`recordName` ASC) USING BTREE,
  CONSTRAINT `recordname` FOREIGN KEY (`recordName`) REFERENCES `known/unknown callers` (`callerName`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of records
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `userId` int NOT NULL AUTO_INCREMENT,
  `userName` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userPhone` int NOT NULL,
  `userPassword` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`userId`) USING BTREE,
  UNIQUE INDEX `phone`(`userPhone` ASC) USING BTREE,
  UNIQUE INDEX `password`(`userPassword`) USING HASH
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
