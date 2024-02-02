#include <iostream>
using namespace std;

struct node {
    int data;
    node* next;
};

node *first, *last, *current;

// declartion
void createList(int data);
void traverse();
void release();


int main(){
    int num = 0;

    first = NULL;
    last = NULL;
    current = NULL;

    while(true){
        cout << "Enter data " ;
        cin >> num ;
        if(num == 0) break;
        createList(num);
    }
    traverse();
    release();
    return 0;
}

// display the linked list
void traverse(){
    current = first;
    while(current != NULL){
        cout << current->data << endl;
        current = current->next;
    }
}

// release the linked list (Queue structure)
void release(){
    while(first != NULL){
        current = first;
        first = first->next;
        cout << "Released " << current->data << endl;
        delete current;
    }
}

// create linked list array
void createList(int data){
    current = new node;
    current->data = data;
    current->next = NULL;

    if(first == NULL){
        first = current;
    }else{
        last->next = current;
    }
    last = current;
}