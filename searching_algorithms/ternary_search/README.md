## Ternary Search
***
- **Decrease (by constant) and conquer algorithm**
- similar to **binary search**
- divide the array into **three parts** insteads of two
- it reduces time complexity a bit more

:alert: Note: **Array needs to be sorted to perform ternary search on it**.
```agsl
mid1 = l + (r-l)/3
mid2 = r - (r-l)/3
```

### Steps to perform Ternary Search:
1. First, compare key with element at mid1. if found, return mid1
2. If not, compare key with element at mid2. if found, return mid2
3. If not, check the key is less than the element at mid1.
4. If yes, recur to first part.
5. If not, we check the key is greater than element at mid2.
6. If yes, recur to the third part
7. If not. we recur to the second (middle) part

**Time Complexity**: O(log3 n)\
**Auxiliary Space**: O(log3 n)

## Iterative Approach of Ternary Searc
```java
class GFG{
    static int ternarySearch(int l, int r, int key, int ar[]){
        while(r >= l){
            int mid1 = l + (r - l) / 3;
            int mid2 = r - (r - l) / 3;
            if(ar[mid1] == key) {
                return mid1;
            }
            if(ar[mid2] == key){
                return mid2;
            }
            if(key < ar[mid1]){
                r = mid1 - 1;
            }else if(key > ar[mid2]){
                l = mid2 + 1;
            }else{
                l = mid1 + 1;
                r = mid2 - 1;
            }
        }
        return -1;
    }
}
```

### Binary Search Vs Ternary Search
Time complexity of the binary search is more than
the ternary search but it doesn't mean that 
ternary search is better. In reality, the number
of comparisons in ternary search much more which
makes it slower than binary search.

### <ins>Advantages</ins>
- Ternary Search is more efficient than linear search and comparable to binary search
- Number of comparisons get reduced.
- Works well for large datasets.
- Fits well with optimization problems.
- Non-recursive algorithm, it doesn't require additioal memory to store function call stack. space efficient

### <ins>Disadvantages</ins>
- Only applicable to ordered lists or arrays.
- Requires an in depth understanding of recursion.
- Implementation is not easy.
- Is not suitable for non-continuous function as it is dividing into 3 parts.

### <ins>When to use:</ins>
- When need to find the position of a specific value with a large ordered array or list
- When need to find the maximum or minimum value of a function
- When need an alternative algorithm for binary search with efficient time complexity.
- When you are interested in reducing the number of comparisons.

**References:** [GeekforGeek.org](https://geeksforgeeks.org).