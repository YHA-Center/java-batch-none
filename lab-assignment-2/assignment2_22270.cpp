#include <iostream>
#include <vector>

using namespace std;

struct Node {
    int data;
    Node* left;
    Node* right;
};

Node* createNode(int data) {
    Node* node = new Node;
    node->data = data;
    node->left = node->right = nullptr;
    return node;
}

Node* buildTree(vector<int>& inorder, vector<int>& postorder, int inStart, int inEnd) {
    if (inStart > inEnd) {
        return nullptr;
    }

    int rootData = postorder.back();
    postorder.pop_back();
    Node* root = createNode(rootData);

    int inIndex = inStart;
    while (inorder[inIndex] != rootData) {
        inIndex++;
    }

    root->right = buildTree(inorder, postorder, inIndex + 1, inEnd);
    root->left = buildTree(inorder, postorder, inStart, inIndex - 1);

    return root;
}

void preorderTraversal(Node* root) {
    if (root == nullptr) {
        return;
    }

    cout << root->data << " ";
    preorderTraversal(root->left);
    preorderTraversal(root->right);
}

int main() {
    vector<int> inorder = {4, 2, 5, 1, 6, 3};
    vector<int> postorder = {4, 5, 2, 6, 3, 1};

    Node* root = buildTree(inorder, postorder, 0, inorder.size() - 1);

    cout << "Preorder traversal: ";
    preorderTraversal(root);
    cout << endl;

    return 0;
}
