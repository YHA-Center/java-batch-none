// this is iterative approach

import java.io.*;

class binary_search{
    // return index of x if present
    int binarySearch(int arr[], int x){
        int f=0; l=arr.length - 1;
        while(f<=l){
            int m = f + (l-1)/ 2;
            // if present at mid
            if(arr[m] == x){
                return m;
            }
            // if x greater, ignore left
            if(arr[m] < x){
                f = m+1;
            }
            // if x smaller, ignore right half
            else{
                l = m-1;
            }
        }
    }

    // driver code
    public static void main(String args[]){
        binary_search ob = new binary_search();
        int arr[] = {2,3,4,10,20};
        int n = arr.length;
        int x = 10;
        int result = ob.binarySearch(arr, x);
        if(result == -1){
            System.out.println("Element is not present in array");
        }else{
            System.out.println("Element is present at index : " + result)
        }
    }
}