//interpolation search implementing
// search with recursion
import java.util.*;

public class approach_one {
    // if x present in arr[0....n-1], then returns
    // index of it, else return -1.
    public static int interpolationSearch(int arr[], int lo, int hi, int x){
        int pos;
        // array must be sorted,
        // element must present in arr and must be in range
        // defined by corner
        if(lo <= hi && x >= arr[lo] && x <= arr[hi]){
            // probing the position with keeping uniform distri in mind
            pos = lo + (((hi-lo)/(arr[hi]-arr[lo])) * (x-arr[lo]));
            // if target found
            if(arr[pos] == x){
                return pos;
            }
            // if x is larger, x is in right of array
            if(arr[pos] < x){
                return interpolationSearch(arr, pos+1, hi, x);
            }
            // if x is samller, x is in left of array
            if(arr[pos] > x){
                return interpolationSearch(arr, lo, pos-1, x);
            }
            return -1;
        }
        return -1;
    }

    // driver code
    public static void main(String args[]){
        // array
        int arr[] = {10,12,13,16,18,19,20,21,22,23,24,33,35,42,47};
        int n = arr.length;
        // element to be searched;
        int x = 18;
        int index = interpolationSearch(arr, 0, n-1, x);
        // if found
        if(index != -1){
            System.out.println("Element found at index : " + index);
        }else{
            System.out.println("Element was not found.");
        }
    }
}