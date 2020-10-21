
データベース>テーブル>カラム

```SQL:MySQL
SELECT * FROM テーブル名;
```
-そのテーブルの情報を全て表示する

```SQL:MySQL
INSERT INTO テーブル名 SET　カラム名=xx;
```
-テーブルにレコードを追加する

```SQL:MySQL
= INSERT INTO 'テーブル名' (カラム名,カラム名) VALUES ('データ', 'データ');
```

```SQL:MySQL
CAREATE TABLE テーブル名 (カラム名 データ型, カラム名 データ型,・・・);
```
-テーブルを作成する

```SQL:MySQL
UPDATE テーブル名　SET 更新するカラム名=更新するデータ WHERE カラム名(基本的にはid)=データ;
```
-特定のカラムのデータを更新する

```SQL:MySQL
UPDATE テーブル名　SET 更新するカラム名=更新するデータ;
```
-全てのデータの特定のカラムの情報を更新する

```SQL:MySQL
DELETE FROM テーブル名 WHERE カラム名(基本的にはid)=データ;
```
-特定のカラムのデータを削除する

```SQL:MySQL
DELETE FROM テーブル名;
```
-そのテーブルの全てのデータを削除する

主キーの設定はテーブルを空にしてからじゃないとできない
主キーでは重複した数字を使えない

```SQL:MySQL
ALTER TABLE 'テーブル名' ADD PRIMARY KEY('カラム名');
```
-そのテーブルの特定のカラムに主キーを設定する

AUTO INCREMENTを設定するとIDが自動で連番で追加される
AUTO INCREMENTを設定した状態でデータを消すとそのidは永久欠番になる

```SQL:MySQL
SELECT FROM テーブル名 WHERE カラム名=データ;
```
-そのカラムに指定したデータが入っているレコードをテーブルから取り出す

```SQL:MySQL
SELECT FROM テーブル名 WHERE カラム名<データ;
```
-そのカラムに指定したデータより小さいレコードをテーブルから取り出す

```SQL:MySQL
SELECT FROM テーブル名 WHERE カラム名>データ;
```
-そのカラムに指定したデータより大きいレコードをテーブルから取り出す

```SQL:MySQL
SELECT FROM テーブル名 WHERE カラム名 LIKE '%データ%';
```
-そのカラムに指定したデータが含まれているレコードをテーブルから取り出す

```SQL:MySQL
SELECT FROM テーブル名 WHERE カラム名 LIKE 'データ%';
```
-そのカラムに指定したデータが最初に含まれているレコードをテーブルから取り出す

```SQL:MySQL
SELECT FROM テーブル名 WHERE カラム名 LIKE '%データ';
```
-そのカラムに指定したデータが最後に含まれているレコードをテーブルから取り出す

```SQL:MySQL
SELECT FROM テーブル名 WHERE oo AND oo;
```
-どちらの条件にも適合しているデータを取り出す

```SQL:MySQL
SELECT FROM テーブル名 WHERE oo OR oo;
```
-どちらかの条件に適合しているデータを取り出す

timestamp
-最終作成日時、更新日時がわかる

```SQL:MySQL
SELECT SUM(カラム名) FROM テーブル名;
```
-指定したカラムの合計を出す

```SQL:MySQL
SELECT MAX(カラム名) FROM テーブル名;
```
-指定したカラムの最大値を出す

```SQL:MySQL
SELECT MIN(カラム名) FROM テーブル名;
```
-指定したカラムの最小値を出す

```SQL:MySQL
SELECT COUNT(カラム名) FROM テーブル名;
```
-指定したカラムの件数を出す

```SQL:MySQL
SELECT AVG(カラム名) FROM テーブル名;
```
-指定したカラムの平均値を出す

テーブル同士のリレーションの作成方法
1. 1:NのNの方のテーブルに外部キーを設定する
2.
```SQL:MySQL
SELECT * FROM 1の方のテーブル名, nの方のテーブル名 1の方のテーブル名.主キー=Nの方のテーブル名.外部キー
```

結合するテーブルに同じカラム名が含まれているなら　WHEREの後に テーブル名.カラム名 というようにテーブル名を明らかにする

```SQL:MySQL
SELECT * FROM テーブル名 ORDER BY カラム名 ASC;
```
-カラムが小さい順で並べられる

```SQL:MySQL
SELECT * FROM テーブル名 ORDER BY カラム名 DESC;
```
-カラムが大きい順で並べられる

ORDER BYの前にWHEREを入れると条件を指定できる
文字列でORDER BYを使うとSQLはひらがな→カタカナ→漢字の順で並び替えられていて、しかも漢字は文字コードの順で並び替えられるので正しく並び替えたいのならひらがなかカタカナで統一させたカラムを作る必要がある

ランクなどの相対情報ではなく売り上げなどの絶対情報でカラムを管理するべし

```SQL:MySQL
SELECT カラム名, SUM(COUNT) FROM テーブル名 GROUP BY カラム名;
```
-グループごとの合計を出す
-GROUP BY と SELECT のあとのカラム名は同じにしなければならない

```SQL:MySQL
SELECT カラム名, SUM(COUNT) FROM 1の方のテーブル名 LEFT JOIN Nの方のテーブル名 ON 1の方のテーブル名.主キー=Nの方のテーブル名.外部キー GROUP BY Nの方のテーブル名.外部キー;
```
-計算結果がないデータも表示させる

```SQL:MySQL
SELECT DISTINCT(カラム名) FROM テーブル名;
```
-カラムの重複を1つにまとめて表示してくれる

```SQL:MySQL
SELECT * FROM テーブル名 WHERE カラム名 BETWEEN x AND y;
```
-同じカラムの中で範囲がxからyまでのものを表示させる

```SQL:MySQL
SELECT * FROM テーブル名 WHERE カラム名 IN (x,y);
```
-カラムがxまたはyのデータをテーブルから取り出す

```SQL:MySQL
SELECT * FROM LIMIT x, y;
```
-x件目からyこのデータを取り出す

FROMの後のテーブル名の後ろに半角スペースを空けて省略形を記述するとその省略形が別の指定場所でも使える