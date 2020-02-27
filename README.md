In the world of internet, we have a countless number choices for the things like the books we should read, the courses we should do, the music we should listen, the movies we should watch, etc. It is practically impossible to go through almost all the available choices to get the things of our liking. 
Now we are in the need of the system which by processing very large sets of data can make effective recommendations for us. 
Keeping that in mind, I have made a description based <b>MOVIE RECOMMENDATION SYSTEM</b> which uses <b>Hadoop architecture</b> and <b>Apache Hive</b> to make recommendations to its users.
This project is based on the applications of Hadoop and Apache Hive.

Talking about the users' interface of the system it has three drop-down lists by which users can select <b>rating, genres and tags</b> of their choice. Ratings are made on a 5-star scale, with half-star increments (0.5-5.0). Users can select more than one genres and tags of their choice. Users can even leave any of the Ratings, genres and tags fields empty but not all. Based on the choices made by the users the recommender suggests movies to them by processing large data-set in the background. 

Before talking about the implementation part, I would talk about the data-set used for making the recommender and what are the jobs of Hadoop Distributed File System (HDFS) and Apache Hive as that will help to understand the working of the recommender better.</br>
The data-set is taken from <b><a href="https://grouplens.org/datasets/movielens/10m/">Movielens.org</b></a>. It contains over 10,000,000 anonymous ratings and 100,000 different tags for approximately 10,000 movies. The data-set contains 4 different commas separated files which contain different information about each rating made by the users.</br>
The Hadoop Distributed File System (HDFS) is the primary data storage system used by Hadoop applications. It provides high-performance access to data across highly scalable Hadoop clusters. So its main purpose is to store the data efficiently.</br>
Apache Hive is an open source system for querying and analyzing large data sets that are principally stored in Hadoop files. Hive query language is like Structured Query Language (SQL).

Moving on to the implementation part - 
first of all the data-set was moved into the Hadoop Distributed File System (HDFS). 4 different tables are made, one for each data-set files. These tables are joined together using "inner join" command of Apache Hive. These tables are joined using the common MovieID column in each table. After that by using the "Grouping Sets" command cubing is done in which all possible combination of Ratings, Genres and Tags are created and the result is inserted into a new table, let us call this table as "TABLE-A". Then for each record of the TABLE-A movies' name are selected from the original table which has the same Rating, Genre and Tag. The result is inserted into the final table called "Recommendation Table".Making till the Recommendation Table is the precomputation part after that all the queries made by the users are processed on the final Recommendation table using Hive. 
