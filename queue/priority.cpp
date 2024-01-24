#include <iostream>
using namespace std;

/*
Type of queue that arrange elements based
on their priority values.

1. every item has a priority associated with it.
2. High priority is dequeued before an element with low
3. If two elements have the same, they are served according to their order in the queue
*/

/*
Using Linked List (Time Complexity)
- push()  -> O(n)
- pop() -> O(1)
- peek() -> O(1)
*/

typedef struct node{
    int data;

    // lower value indicate higher priority
    int priority;
    struct node* next;
} Node;

// to create a new node
Node* newNode(int d, int p){
    Node* temp = (Node*)malloc(sizeof(Node));
    temp->data = d;
    temp->priority = p;
    temp->next = NULL;

    return temp;
}

// return the value at head
int peek(Node** head) { return (*head)->data; }

// remove element with highest priority from the list
void pop(Node** head){
    Node* temp = *head;
    (*head) = (*head)->next;
    free(temp);
}

// to push according to priority
void push(Node** head, int d, int p){
    Node* start = (*head);

    // create new node
    Node* temp = newNode(d,p);

    // special case: head of list has lesser priority than new node
    if((*head)->priority < p){
        // insert new node before head
        temp->next = *head;
        (*head) = temp;
    }else{
        // traverse the list and find a position to insert new node
        while(start->next != NULL && start->next->priority > p){
            start = start->next;
        }

        // either at the ends of the list or at required position
        temp->next = start->next;
        start->next = temp;
    }
}

int isEmpty(Node** head) {
    return (*head) == NULL;
}

int main(){

    // create a priority queue
    Node* pq = newNode(4,1);
    push(&pq, 5, 2);
    push(&pq, 6, 3);
    push(&pq, 7, 0);

    cout << peek(&pq) << endl;

    while(!isEmpty(&pq)){
        cout << " " << peek(&pq);
        pop(&pq);
    }

    return 0;
}