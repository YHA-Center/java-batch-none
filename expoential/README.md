## Exponential Search

### Exponential search involves two steps:
1. Find range where element is present
2. Do Binary Search in above found range.


**How to find the range where element may be present?** :question:

The idea is to start with subarray size 1, compare its last element with x, then try size 2, then 4 and so on until last element of a subarray is not greater.