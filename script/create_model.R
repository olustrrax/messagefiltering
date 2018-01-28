require('RTextTools')
require('Rweka')


data746_cor <- read.csv(file = "D:train_85_cor_norminal.csv", head = TRUE, sep=",")
set.seed(1)

trainMatrix <- create_matrix(cbind(data746_cor[1:746]))

# Configure the training data
container <- create_container(data746_cor[,1:746], data746_cor$class, trainSize=1:1200, virgin=FALSE)
 
# train a SVM Model
svmmodel <- train_model(container, "SVM", kernel="linear", cost=1)

#test data
testdata <- read.csv( file="D:test800_nor.csv",head=TRUE,sep=",")
testMatrix <- create_matrix(testdata)
test_container <- create_container(testdata[,1:4973], testdata$class, trainSize=1:800, virgin=FALSE)
 

results <- classify_model(test_container, svmmodel)