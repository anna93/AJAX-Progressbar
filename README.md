# AJAX-Progressbar
AJAX Enabled Circular Progress bar.


The original version of this Progress bar can be found at:

http://www.jqueryscript.net/loading/Circular-Percentage-Loader-Plugin-with-jQuery-Canvas-ClassyLoader.html


Please take note of the following:
  * Allows you to continue the progress of the bar.
  * Call incrProgress(a) function to smoothly increment the progress status, which was missing in the original project.
  * Rollback is not allowed.
  * jquery 1.11 is required.

## How to use:
It is a two stage process, 
first calculate the percentage of the process completed(that can be done by initiating an AJAX method which continuously listens to the server or even a setinterval will do!).

Second, pass the calculated percentage to incrProgress(a) function. Rollback is not possible.

## Demo
[Demo: click here](http://shekharanna1993.github.io/AJAX-Progressbar/)

## Screenshot
![alt tag](https://cloud.githubusercontent.com/assets/7301265/5916065/d6633b4e-a632-11e4-934d-58ed263d2839.PNG)
