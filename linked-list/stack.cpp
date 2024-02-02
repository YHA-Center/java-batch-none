#include <iostream>
using namespace std;


struct node {
    int data;
    node* next;
};

node *current, *first;

void createList(int data); // create
void traverse();
void release();

int main(){

    first = NULL;
    int num = 0;
    while(true){
        cout << "Enter data " ;
        cin >> num;
        if(num == 0) break;
        createList(num);
    }

    traverse();  // display what you added
    release(); // delete what you add
    return 0;
}


// create node and linking it
void createList(int data){
    current = new node; // create node object
    current->data = data;   // add data to temporary node
    current->next = first;  // add null to temporary node's next (so this is the perfect node)
    first = current; // first node to current node
}

// display the data
void traverse(){
    current = first;
    while(current != NULL){
        cout << current->data <<endl;
        current = current->next;
    }
}

// release the data
void release(){
    while(first != NULL){
        current = first;
        first = first->next;
        cout << "Remove : " << current->data << endl;
        delete current;
    }
}