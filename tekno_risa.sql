-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Waktu pembuatan: 07. September 2020 jam 00:10
-- Versi Server: 5.0.51
-- Versi PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `tekno_risa`
-- 

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `akhir`
-- 

CREATE TABLE `akhir` (
  `idukm` int(3) NOT NULL,
  `idkriteria` varchar(5) NOT NULL,
  `akhir` varchar(5) NOT NULL,
  `persen` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data untuk tabel `akhir`
-- 

INSERT INTO `akhir` VALUES (1, 'AI', '3.7', '2.59');
INSERT INTO `akhir` VALUES (2, 'AI', '4.6', '3.22');
INSERT INTO `akhir` VALUES (3, 'AI', '4.9', '3.43');
INSERT INTO `akhir` VALUES (1, 'AII', '3.9', '1.17');
INSERT INTO `akhir` VALUES (2, 'AII', '4.8', '1.44');
INSERT INTO `akhir` VALUES (3, 'AII', '3.1', '0.93');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `bobot`
-- 

CREATE TABLE `bobot` (
  `idukm` int(3) NOT NULL,
  `idkriteria` varchar(5) NOT NULL,
  `idsubkriteria` varchar(5) NOT NULL,
  `bobot` varchar(5) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data untuk tabel `bobot`
-- 

INSERT INTO `bobot` VALUES (1, 'AI', 'AI1', '3.5', 'Core Factor');
INSERT INTO `bobot` VALUES (1, 'AI', 'AI2', '4.5', 'Secondary Factor');
INSERT INTO `bobot` VALUES (1, 'AI', 'AI3', '3.5', 'Core Factor');
INSERT INTO `bobot` VALUES (1, 'AI', 'AI4', '3.5', 'Secondary Factor');
INSERT INTO `bobot` VALUES (1, 'AII', 'AII1', '3.5', 'Core Factor');
INSERT INTO `bobot` VALUES (1, 'AII', 'AII2', '4.5', 'Secondary Factor');
INSERT INTO `bobot` VALUES (2, 'AI', 'AI1', '4.5', 'Core Factor');
INSERT INTO `bobot` VALUES (2, 'AI', 'AI2', '5', 'Secondary Factor');
INSERT INTO `bobot` VALUES (2, 'AI', 'AI3', '4.5', 'Core Factor');
INSERT INTO `bobot` VALUES (2, 'AI', 'AI4', '4.5', 'Secondary Factor');
INSERT INTO `bobot` VALUES (2, 'AII', 'AII1', '5', 'Core Factor');
INSERT INTO `bobot` VALUES (2, 'AII', 'AII2', '4.5', 'Secondary Factor');
INSERT INTO `bobot` VALUES (3, 'AI', 'AI1', '5', 'Core Factor');
INSERT INTO `bobot` VALUES (3, 'AI', 'AI2', '4.5', 'Secondary Factor');
INSERT INTO `bobot` VALUES (3, 'AI', 'AI3', '5', 'Core Factor');
INSERT INTO `bobot` VALUES (3, 'AI', 'AI4', '5', 'Secondary Factor');
INSERT INTO `bobot` VALUES (3, 'AII', 'AII1', '3.5', 'Core Factor');
INSERT INTO `bobot` VALUES (3, 'AII', 'AII2', '2.5', 'Secondary Factor');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `gap`
-- 

CREATE TABLE `gap` (
  `idgap` int(3) NOT NULL auto_increment,
  `gap` int(5) NOT NULL,
  `nilai` varchar(5) NOT NULL,
  `ket` varchar(100) NOT NULL,
  PRIMARY KEY  (`idgap`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- 
-- Dumping data untuk tabel `gap`
-- 

INSERT INTO `gap` VALUES (2, 0, '5', 'Kompetensi sesuai dengan yang dibutuhkan');
INSERT INTO `gap` VALUES (3, 1, '4.5', 'Kompetensi individu kelebihan 1 tingkat/level');
INSERT INTO `gap` VALUES (4, -1, '4', 'Kompetensi individu kurang 1 tingkat/level');
INSERT INTO `gap` VALUES (5, 2, '3.5', 'Kompetensi individu kelebihan 2 tingkat/level');
INSERT INTO `gap` VALUES (6, -2, '3', 'Kompetensi individu kurang 2 tingkat/level');
INSERT INTO `gap` VALUES (7, 3, '2.5', 'Kompetensi individu kelebihan 3 tingkat/level');
INSERT INTO `gap` VALUES (8, -3, '2', 'Kompetensi individu kurang 3 tingkat/level');
INSERT INTO `gap` VALUES (9, 4, '1.5', 'Kompetensi individu kelebihan 4 tingkat/level');
INSERT INTO `gap` VALUES (10, -4, '1', 'Kompetensi individu kurang 4 tingkat/level');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `hasil`
-- 

CREATE TABLE `hasil` (
  `idukm` int(3) NOT NULL,
  `hasil` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data untuk tabel `hasil`
-- 

INSERT INTO `hasil` VALUES (1, 4);
INSERT INTO `hasil` VALUES (2, 5);
INSERT INTO `hasil` VALUES (3, 4);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `kriteria`
-- 

CREATE TABLE `kriteria` (
  `idkriteria` varchar(10) NOT NULL,
  `kriteria` varchar(20) NOT NULL,
  `bobot` varchar(5) NOT NULL,
  PRIMARY KEY  (`idkriteria`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data untuk tabel `kriteria`
-- 

INSERT INTO `kriteria` VALUES ('AI', 'Aspek Finansial', '70');
INSERT INTO `kriteria` VALUES ('AII', 'Aspek Non Finansial', '30');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `login`
-- 

CREATE TABLE `login` (
  `idlogin` int(3) NOT NULL auto_increment,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` int(1) NOT NULL,
  PRIMARY KEY  (`idlogin`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Dumping data untuk tabel `login`
-- 

INSERT INTO `login` VALUES (1, 'a', '0cc175b9c0f1b6a831c399e269772661', 1);
INSERT INTO `login` VALUES (3, 'b', 'b', 2);
INSERT INTO `login` VALUES (4, 'c', 'c', 2);
INSERT INTO `login` VALUES (5, 'd', 'd', 2);
INSERT INTO `login` VALUES (6, 'ftgjhfg', 'ftgjhfg', 2);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `nilai`
-- 

CREATE TABLE `nilai` (
  `idnilai` int(10) NOT NULL auto_increment,
  `idukm` int(3) NOT NULL,
  `idkriteria` varchar(10) NOT NULL,
  `idsubkriteria` varchar(10) NOT NULL,
  `idsubkriteria2` int(3) NOT NULL,
  `nilai` varchar(3) NOT NULL,
  `gap` varchar(5) NOT NULL,
  PRIMARY KEY  (`idnilai`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

-- 
-- Dumping data untuk tabel `nilai`
-- 

INSERT INTO `nilai` VALUES (1, 1, 'AI', 'AI1', 1, '1', '');
INSERT INTO `nilai` VALUES (2, 1, 'AI', 'AI2', 6, '1', '');
INSERT INTO `nilai` VALUES (3, 1, 'AI', 'AI3', 11, '1', '');
INSERT INTO `nilai` VALUES (4, 1, 'AI', 'AI4', 16, '1', '');
INSERT INTO `nilai` VALUES (5, 1, 'AII', 'AII1', 21, '1', '');
INSERT INTO `nilai` VALUES (6, 1, 'AII', 'AII2', 23, '1', '');
INSERT INTO `nilai` VALUES (7, 2, 'AI', 'AI1', 4, '4', '');
INSERT INTO `nilai` VALUES (8, 2, 'AI', 'AI2', 7, '2', '');
INSERT INTO `nilai` VALUES (9, 2, 'AI', 'AI3', 12, '2', '');
INSERT INTO `nilai` VALUES (10, 2, 'AI', 'AI4', 17, '2', '');
INSERT INTO `nilai` VALUES (11, 2, 'AII', 'AII1', 22, '3', '');
INSERT INTO `nilai` VALUES (12, 2, 'AII', 'AII2', 24, '3', '');
INSERT INTO `nilai` VALUES (13, 3, 'AI', 'AI1', 3, '3', '');
INSERT INTO `nilai` VALUES (14, 3, 'AI', 'AI2', 8, '3', '');
INSERT INTO `nilai` VALUES (15, 3, 'AI', 'AI3', 13, '3', '');
INSERT INTO `nilai` VALUES (16, 3, 'AI', 'AI4', 18, '3', '');
INSERT INTO `nilai` VALUES (17, 3, 'AII', 'AII1', 26, '5', '');
INSERT INTO `nilai` VALUES (18, 3, 'AII', 'AII2', 25, '5', '');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `publish`
-- 

CREATE TABLE `publish` (
  `publish` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data untuk tabel `publish`
-- 

INSERT INTO `publish` VALUES (1);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `subkriteria`
-- 

CREATE TABLE `subkriteria` (
  `idsubkriteria` varchar(10) NOT NULL,
  `idkriteria` varchar(10) NOT NULL,
  `subkriteria` varchar(100) NOT NULL,
  `profil` int(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY  (`idsubkriteria`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data untuk tabel `subkriteria`
-- 

INSERT INTO `subkriteria` VALUES ('AI1', 'AI', 'Modal Usaha', 3, 'Core Factor');
INSERT INTO `subkriteria` VALUES ('AI2', 'AI', 'Dana Kas', 2, 'Secondary Factor');
INSERT INTO `subkriteria` VALUES ('AI3', 'AI', 'Pendapatan Bersih', 3, 'Core Factor');
INSERT INTO `subkriteria` VALUES ('AI4', 'AI', 'Pendapatan Kotor', 3, 'Secondary Factor');
INSERT INTO `subkriteria` VALUES ('AII1', 'AII', 'Aset', 3, 'Core Factor');
INSERT INTO `subkriteria` VALUES ('AII2', 'AII', 'SDM', 2, 'Secondary Factor');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `subkriteria2`
-- 

CREATE TABLE `subkriteria2` (
  `idsubkriteria2` int(10) NOT NULL auto_increment,
  `idsubkriteria` varchar(10) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `nilai` int(5) NOT NULL,
  PRIMARY KEY  (`idsubkriteria2`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

-- 
-- Dumping data untuk tabel `subkriteria2`
-- 

INSERT INTO `subkriteria2` VALUES (1, 'AI1', '< 1jt', 1);
INSERT INTO `subkriteria2` VALUES (2, 'AI1', '1jt - 2jt', 2);
INSERT INTO `subkriteria2` VALUES (3, 'AI1', '2jt - 3jt', 3);
INSERT INTO `subkriteria2` VALUES (4, 'AI1', '3jt - 4jt', 4);
INSERT INTO `subkriteria2` VALUES (5, 'AI1', '> 4jt', 5);
INSERT INTO `subkriteria2` VALUES (6, 'AI2', '< 1jt', 1);
INSERT INTO `subkriteria2` VALUES (7, 'AI2', '1jt - 2jt', 2);
INSERT INTO `subkriteria2` VALUES (8, 'AI2', '2jt - 3jt', 3);
INSERT INTO `subkriteria2` VALUES (9, 'AI2', '3jt - 4jt', 4);
INSERT INTO `subkriteria2` VALUES (10, 'AI2', '> 4jt', 5);
INSERT INTO `subkriteria2` VALUES (11, 'AI3', '< 1jt', 1);
INSERT INTO `subkriteria2` VALUES (12, 'AI3', '1jt - 2jt', 2);
INSERT INTO `subkriteria2` VALUES (13, 'AI3', '2jt - 3jt', 3);
INSERT INTO `subkriteria2` VALUES (14, 'AI3', '3jt - 4jt', 4);
INSERT INTO `subkriteria2` VALUES (15, 'AI3', '> 4jt', 5);
INSERT INTO `subkriteria2` VALUES (16, 'AI4', '< 1jt', 1);
INSERT INTO `subkriteria2` VALUES (17, 'AI4', '1jt - 2jt', 2);
INSERT INTO `subkriteria2` VALUES (18, 'AI4', '2jt - 3jt', 3);
INSERT INTO `subkriteria2` VALUES (19, 'AI4', '3jt - 4jt', 4);
INSERT INTO `subkriteria2` VALUES (20, 'AI4', '> 4jt', 5);
INSERT INTO `subkriteria2` VALUES (21, 'AII1', 'Gedung (msh sewa)', 1);
INSERT INTO `subkriteria2` VALUES (22, 'AII1', 'Gedung (milik sendiri)', 3);
INSERT INTO `subkriteria2` VALUES (23, 'AII2', 'SDM Buruk', 1);
INSERT INTO `subkriteria2` VALUES (24, 'AII2', 'SDM Baik', 3);
INSERT INTO `subkriteria2` VALUES (25, 'AII2', 'SDM Sip', 5);
INSERT INTO `subkriteria2` VALUES (26, 'AII1', 'Punya mobil', 5);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `total`
-- 

CREATE TABLE `total` (
  `cf` int(3) NOT NULL,
  `sf` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data untuk tabel `total`
-- 

INSERT INTO `total` VALUES (60, 40);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `ukm`
-- 

CREATE TABLE `ukm` (
  `idukm` int(3) NOT NULL auto_increment,
  `idlogin` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tlp` varchar(50) NOT NULL,
  PRIMARY KEY  (`idukm`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data untuk tabel `ukm`
-- 

INSERT INTO `ukm` VALUES (1, 3, 'b1', 'kughkihgkuh1', 'gbigi1');
INSERT INTO `ukm` VALUES (2, 4, 'c', 'yugfuytguyguygt', 'ygi');
INSERT INTO `ukm` VALUES (3, 5, 'd', 'jgfuyjg', 'yigiygiyg');
