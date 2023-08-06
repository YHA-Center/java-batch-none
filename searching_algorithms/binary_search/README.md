## Binary Search - Data Structure and Algorithm Tuto

- is defined as **searching algorithm**
- only used in **sorted array**.
- by **repeatly dividing the search interval in half**.
- use to **to sort array** and **reduce time complexity to O(log N)**.

### **Conditions for when to apply Binary Search**

-[X] The data structure must be sorted
-[X] Access to any element of data structure takes constant time.

### **Algorithm Steps**

- Divide the space into two halves by **finding middle index**
- Compare middle element with key.
- If key is found at middle, terminated the program.
- If key is smaller than mid element, **takes the first half**.
- If key is larger than mid element, **takes the second half**.
- do this process until the key is found.

> Iterative Binary Search Algorithm
>
> Recursive Binary Search Algorithm
> 

1. **Iterative Binary Search Algorithm**
----
Using ***while*** loop to continue the process of comparing the key and two halves.
```agsl
Time Complexity: O(log N)
Auxiliary Space: O(1)
```

2. **Recursive Binary Search Algorithm**
----
Create a **recursive function** and compare the mid with the key.
```agsl
Time Complexity: 
    - Best Case: O(log N)
    - Average Case: O(log N)
    - Worst Case: O(log N)
Auxiliary Space: O(1) if the recursive call stack is considered then the auxiliary space will be O(log N).
```
