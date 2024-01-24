## Interpolation Search
- **Linear Search** - ***O(n)*** times
- **Jump Search** - ***O(sqrt(n))*** times
- **Binary Search** - ***O(log n)*** times
- **Interpolation Search** - An improvement over **Binary Search** for instance.


```agsl
    // The idea of formula is return higher value of pos
    // when element to be searched is closer to arr[hi]. And
    // smaller value when closer to arr[lo]
    
    arr[] ==> Array where elements need to be searched
    
    x ==> Element to be searched
    lo ==> Starting index in arr[]
    hi ==> Ending index in arr[]
```

> pos = lo + [(x-arr[lo]).(hi-lo) / (arr[hi] - arr[lo])]

There are many different interpolation methods
- linear interpolation
- takes two data points as(x1,y1) and (x2,y2) formulas is : at point(x,y).
- The formula of finding value : **K = data - low/high-low**
- **K** is a constant

### The formula for pos can be derived as follows
> Genearl equ : **y = m*x + c**
> 
> **y** is value and **x** is index.
> 
> **arr[hi] = m*hi+c ---(1)**
> 
> **arr[lo] = m*lo+c ---(2)**
> 
> **x = m*pos + c ---(3)**
> 
> **m = (arr[hi] - arr[lo])/(hi - lo)**
> 
> subtracting eqxn : **(2) from (3)**
> 
> **x - arr[lo] = m * (pos - lo)**
> 
> **lo + (x - arr[lo])/m = pos**
> 
> **pos = lo + (x - arr[lo]) * (hi -lo)/(arr[hi]-arr[lo])**

### **Algorithm**
The rest of the interpolation algorithm is the same except for the above partition logic
+ **Step1**: In a loop, calculate the value of "pos" using the probe position formula
+ **Step2**: If it is a match, return the index of the item, and exit
+ **Step3**: If the item is less than arr[pos], calculate the probe position of the left sub-array. Otherwise, calculate the same in the right sub-array.
+ **Step4**: Repeat until a match is found or the sub-array reduces to zero.


**Time Complexity**: O(log2(log2 n)) for the average case and O(n) for the worst case <br>
**Auxiliary Space Complexity**: O(1)

----
Reference: [GeeksforGeeks](https://geeksforgeeks.org).
