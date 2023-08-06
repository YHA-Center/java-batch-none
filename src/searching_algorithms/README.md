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
:8ball:**Time Complexity** : O(Log n) <br>
:rocket:**Auxiliary Space** : The method using of binarySearch is ***recursive*** and requires ***O(Log n)*** spaces. With iterative Binary Search, we need only ***O(1)*** space.
<br>

**Applications of Exponential Search** <br>
<ul>
    <li>useful for unbounded searches, where size is infinte.</li>
    <li>works better than Binary search for bounded arrays, and also when the element to be searched is closer to the first element</li>
</ul>

:two: **Iterative Implementation (Second apporach)**
<br>
```
    import java.util.*;
    class Main{
        //exponential search function
        public static int exponential_search(ArrayList<Integer> arr, int x){
            int n = arr.size();
            if(n == 0){
                return -1;
            }
            //find range for binary search by repeated doubling i
            int i =1;
            while(i < n && arr.get(i) < x){
                i *= 2;
                //perform binary search on the range [i/2, min(i, n-1)]
                int left = i/2;
                int right = Math.min(i, n-1);
                while(left <= right){
                    int mid = (left + right) / 2; // finding mid
                    if(arr.get(mid) == x){
                        return mid;
                    }else if (arr.get(mid) < x){
                        left = mid + 1;
                    }else{
                        right = mid - 1;
                    }
                }
                return -1;
            }
        }

        //Driver code
        public static void main(String args[]){
            ArrayList<Integer> arr = new ArrayList<>(Arrays.asList(2,3,4,10,40));
            int n = arr.size();
            int x = 10;
            int result = exponential_search(arr, x);

            if(result == -1){
                System.out.println("Element not found in the array");
            }else{
                System.out.println("Element is present at index " + result);
            }
        }
    }
```
***

Reference: [GeekforGeeks.org](https://geeksforgeeks.org)