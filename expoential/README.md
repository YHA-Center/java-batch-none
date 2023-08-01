## Exponential Search

### Exponential search involves two steps:
1. Find range where element is present
2. Do Binary Search in above found range.


:question::question: 
**How to find the range where element may be present?** 

:hammer: The idea is to start with subarray size 1, compare its last element with x, then try size 2, then 4 and so on until last element of a subarray is not greater. <br>
Once we find an index i (after repeated doubling of i), we know that the element must be present between i/2 and i (why i/2? because we could not find a greater value in previous iteration);

:gun: Java BinarySearch Syntax <br>
<code> Syntax: java.util.Arrays.binarySearch(arr, startIndex, endIndex, value);
</code>


### **Output** <br>
:clock:**Time Complexity** : O(Log n) <br>
:rocket:**Auxiliary Space** : The method using of binarySearch is ***recursive*** and requires ***O(Log n)*** spaces. With iterative Binary Search, we need only ***O(1)*** space.
<br>