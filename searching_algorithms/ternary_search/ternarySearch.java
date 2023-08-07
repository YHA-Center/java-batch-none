
// recursive approach to ternary search

public class ternarySearch{
    static int ternarysearch(int l, int r, int key, int a[]){
        if(r >= 1){
            // find the mid1 and mid2
            int mid1 = l + (r-l) / 3;
            int mid2 = r - (r-l) / 3;

            // Check if key is present at any mid
            if(a[mid1] == key){
                return mid1;
            }
            if(a[mid2] == key){
                return mid2;
            }

            // since key is not present at mid,
            // check in which region it is present
            // then repeat the Search operation
            // in that region
            if(key < a[mid1]) {
                // the key lies in between l and mid1
                return ternarysearch(l, mid1 - 1, key, a);
            }
            else if(key > a[mid2]) {
                // the key lies in between mid2 and r
                return ternarysearch(mid2 + 1, r, key, a);
            }else {
                // the key lies in between mid1 and mid2
                return ternarysearch(mid1 + 1, mid2 - 1, key, a);
            }

        }
        return -1;
    }

    // driver code
    public static void main(String args[]) {
        int l, r, p, key;
        int ar[] = {1,2,3,4,5,6,7,8,9,10};
        l = 0;
        r = 9;
        key = 5;
        p = ternarysearch(l, r, key, ar);
        System.out.println("Index of " + key + " is " + p);
        key = 50;
        p = ternarysearch(l, r, key, ar);
        System.out.println("Index of " + key + " is " + p);
    }
}
