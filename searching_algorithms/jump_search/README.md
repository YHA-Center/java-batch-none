## Jump Search Algorithm

### Performance in comparison to linear and binary search <br>
If we compare it with linear and binary search then it comes out then it is better
than linear search but not better than binary search

:anger: **increasing order of performance is**
> linear search < jump search < binary search

:question: **What is the optimal block size to be skipped?** <br>
In the worst case, we have to do **n/m jumps**, and if the last checked 
value is greater than the element to be searched for, we perform **m-1** comparisons
more for linear search. Therefore, the total number of comparisons in the worst
case will be **((n/m) + m-1)**. The value of the function **((n/m)+ m-1)** will
be minimum when **m = sqrt(n)**. Therefore, the best step size is m = sqrt(n).
<br>
***

### :fire: **Algorithm steps**
- Jump Search is an algorithm for finding a specific value in a sorted array by jumping through certain steps in the array
- The steps are determined by the sqrt of the length of the array.
- Here is a step-by-step algorithm for the jump search.
- Determine the step size m by taking the sqrt of the length of the array n.
- Start at the first element of the array and jump m steps until the value at that position is greater than the target value. Once a value is greater than the target is found, perform linear search starting from the previous step until the target is found or it is clear that the target is not in the array. If the target is found, return its index. If not, return -1 to indicate that the target was not found in the array.

:herb: **Time Complexity** : ***O(sqrt(n))** <br>
:seedling: **Auxiliary Space** : ***O(1)***

### Advantage of Jump Search
1. :sunflower: Better than a linear search for arrays where the elements are uniformly distributed.
2. :leaves: Jump search has a lower time complexity compared to a linear search for large arrays.
3. :mushroom: The number of steps taken in jump search is proportional to the square root of the size of the array, making it more efficient for large arrays.
4. :evergreen_tree: It is easier to implement compared to other search algorithms like binary search or tenary search.
5. :seedling: Jump search works well for arrays where the elements are in order and uniformly distributed, as it can jump to closer position in the array with each iteration.

***

### Important Points:
- [x] Works only with sorted arrays.
- [x] The optimal size of a block to be jumped is (sqrt(n)). This makes the time complexity of Jump Search **(O(sqrt(n)))**. <br>
- [x] The time complexity of Jump Search is between Linear Search **(O(n))** and Binary Search **O(Log n)**.
- [x] Binary Search is better than Jump Search, but Jump Search has the advantage that we traverse back only once (Binary Search may require up to **O(Log n)**) jumps, consider a situation where the element to be searched is the smallest element or just bigger than the smallest). So, in a system where binary search is costly, we use Jump Search.

***
:bulb: References : [GeeksforGeeks.org](https://geeksforgeeks.org).


