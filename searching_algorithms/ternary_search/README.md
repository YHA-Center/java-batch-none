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