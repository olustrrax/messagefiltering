library(rpart)
library(rattle)


data746_cor <- read.csv(file = "D:train_85_cor_norminal.csv", head = TRUE, sep=",")
set.seed(1)

tree_cor85 <- rpart(class ~ ., data746_cor, method = "class")

testdata <- read.csv( file="D:test800_nor.csv",head=TRUE,sep=",")
tree_pred <- predict(tree_cor85, testdata, type="class")

testing_class <- testdata$class

#command to find TP, TN, FP, FN predict class
t_positive <- length(tree_pred[tree_pred=='positive' & tree_pred ==testing_class])
t_negative <- length(tree_pred[tree_pred!='positive' & tree_pred ==testing_class])
f_positive <- length(tree_pred[tree_pred=='positive' & tree_pred !=testing_class])
f_negative <- length(tree_pred[tree_pred!='positive' & tree_pred !=testing_class])

#command for collect data  TP,TN,FP,FN into  data.frame
conf_table <- data.frame(TP = t_positive, TN = t_negative, FP = f_positive, FN = f_negative)

#find Accuracy
accuracy <- (conf_table[["TP"]] + conf_table[["TN"]]) /(conf_table[["TP"]] + conf_table[["FP"]] + conf_table[["TN"]] + conf_table[["FN"]]) * 100
accu <- (t_positive+t_negative)/(800)*100

#find recall
recall <- conf_table[["TP"]] / (conf_table[["TP"]] + conf_table[["FN"]]) * 100


#-----------------------------
data498_ig <- read.csv(file = "D:train_90_ig.csv", head = TRUE, sep=",")
tree_ig90 <- rpart(class ~ ., data498_ig, method = "class")

testdata <- read.csv( file="D:test800_nor.csv",head=TRUE,sep=",")
tree_pred1 <- predict(tree_ig90, testdata, type="class")

t_positive1 <- length(tree_pred1[tree_pred1=='positive' & tree_pred1 ==testing_class])
t_negative1 <- length(tree_pred1[tree_pred1!='positive' & tree_pred1 ==testing_class])
f_positive1 <- length(tree_pred1[tree_pred1=='positive' & tree_pred1 !=testing_class])
f_negative1 <- length(tree_pred1[tree_pred1!='positive' & tree_pred1 !=testing_class]).

accu <- (t_positive1+t_negative1)/(800)*100
#------------------------------
data746_ig <- read.csv(file = "D:train_85_ig.csv", head = TRUE, sep=",")
tree_ig85 <- rpart(class ~ ., data746_ig, method = "class")

testdata <- read.csv( file="D:test800_nor.csv",head=TRUE,sep=",")
tree_pred2 <- predict(tree_ig85, testdata, type="class")

t_positive2 <- length(tree_pred1[tree_pred2=='positive' & tree_pred2 ==testing_class])
t_negative2 <- length(tree_pred1[tree_pred2!='positive' & tree_pred2 ==testing_class])
f_positive2 <- length(tree_pred1[tree_pred2=='positive' & tree_pred2 !=testing_class])
f_negative2 <- length(tree_pred1[tree_pred2!='positive' & tree_pred2 !=testing_class])

accu <- (t_positive2+t_negative2)/(800)*100
conf_table2 <- data.frame(TP = t_positive2, TN = t_negative2, FP = f_positive2, FN = f_negative2)
