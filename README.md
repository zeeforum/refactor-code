Hi,

I just found some time to take a look on the code you have given to me.
And I found that:

Code is not following repository design pattern. It's also not following eloquent ORM.

There are some places where we need to check whether the variable is set or not and also checking it's empty while it's not required.
There we can use nullcoelscing operator.

We also need to strictly follow the design pattern, if we need to use the repository pattern, then we should only do the repository pattern not the eloquent ORM.
Some code that is written can not be used. Even code is not well commented no one can undertand easily.

I just found time to edit booking controller file. And to write interfaces and remove some code from booking repository file. But I can not take a proper look on it due to time.
The code can be improved and can use propertly repository pattern where it's required.

Thanks









===============================================================
Choose ONE of the following tasks.
Please do not invest more than 2-4 hours on this.
Upload your results to a Github repo, for easier sharing and reviewing.

Thank you and good luck!



Code to refactor
=================
1) app/Http/Controllers/BookingController.php
2) app/Repository/BookingRepository.php

Code to write tests
=====================
3) App/Helpers/TeHelper.php method willExpireAt
4) App/Repository/UserRepository.php, method createOrUpdate


----------------------------

What I expect in your repo.

1, A readme with:   Your thoughts about the code. What makes it amazing code. Or what makes it ok code. Or what makes it terrible code. How would you have done it. Thoughts on formatting. Logic.. 

2.  Refactor it if you feel it needs refactoring. The more love you put into it. The easier for us to asses.  

Make two commits. First commit with original code. Second with your refactor so we can easily trace changes. 

NB: you do not need to set up the code on local and make the web app run. It will not run as its not a complete web app. This is purely to assess you thoughts about code, formatting, logic etc


So expected output is a GitHub link with either

1. Readme described above + refactored code 
OR
2. Readme described above + a unit test of the code that we have sent

Thank you!


